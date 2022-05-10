import json
import time
from selenium import webdriver
import requests


def search_google(search_query):
    browser = webdriver.Chrome()
    browser.minimize_window()
    search_url = f"https://www.google.com/search?site=&tbm=isch&source=hp&biw=1873&bih=990&q={search_query}"
    image_links = []
    website_links = []

    browser.get(search_url)
    elements = browser.find_elements_by_class_name('rg_i')

    count = 0
    for e in elements:
        e.click()
        time.sleep(1)
        element = browser.find_elements_by_class_name('v4dQwb')

        elem2 = browser.find_elements_by_class_name('v4dQwb a')

        website_link = elem2[0].get_property('href')

        website_links.append(website_link)

        if count == 0:
            big_img = element[0].find_element_by_class_name('n3VNCb')
        else:
            big_img = element[1].find_element_by_class_name('n3VNCb')

        a = str(big_img.get_attribute('src'))

        image_links.append(a)

        count += 1

        if count == 10:
            break

    image_dict = dict()

    for num in range(len(website_links)):
        image_dict[num] = [website_links[num], image_links[num], ""]

    return image_dict


def nudity_check(image_link_input):
    r = requests.post("https://api.deepai.org/api/nsfw-detector", data={'image': image_link_input, },
                      headers={'api-key': 'af3384bc-cc15-49b1-ac39-84d6e44aa02d'})
    if float(r.json()['output']['nsfw_score']) == 0.014106933027505875:
        return ""
    else:
        detections = ""
        if len(r.json()['output']['detections']) > 0:
            for detection in r.json()['output']['detections']:
                detections += detection['name'] + "<br>"

        nsfw_score = (r.json()['output']['nsfw_score'])

        general_info =  "NSFW Score: " + str(nsfw_score) + "<br><br>" + detections

        return general_info


def main(user_name):

    image_info = search_google(user_name + ' nude')

    for i in image_info:
        image_link = image_info[i][1]
        nudity_info = nudity_check(image_link)
        image_info[i][2] = nudity_info

    image_info = [image_info]

    file = open("image_information.json", 'w')

    json.dump(image_info, file, ensure_ascii=False)
