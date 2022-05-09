import time

import requests
import urllib
from requests_html import HTMLSession
import random
from datetime import datetime
import json

name = "Gürhan GÜNDÜZ"

shame = ["drug", "inappropriate", "sex tape", "humiliation", "ashamed", "indignity", "scandal", "penalty",
         "leaked image"]

swearen = ["4r5e", "5h1t", "5hit", "a55", "anal", "anus", "ar5e", "arrse", "arse", "ass", "ass-fucker", "asses",
           "assfucker",
           "assfukka", "asshole", "assholes", "asswhole", "a_s_s", "b!tch", "b00bs", "b17ch", "b1tch", "ballbag",
           "balls",
           "ballsack", "bastard", "beastial", "beastiality", "bellend", "bestial", "bestiality", "bi+ch", "biatch",
           "bitch",
           "bitcher", "bitchers", "bitches", "bitchin", "bitching", "bloody", "blow job", "blowjob", "blowjobs",
           "boiolas",
           "bollock", "bollok", "boner", "boob", "boobs", "booobs", "boooobs", "booooobs", "booooooobs", "breasts",
           "buceta",
           "bugger", "bum", "bunny fucker", "butt", "butthole", "buttmuch", "buttplug", "c0ck", "c0cksucker",
           "carpet muncher",
           "cawk", "chink", "cipa", "cl1t", "clit", "clitoris", "clits", "cnut", "cock", "cock-sucker", "cockface",
           "cockhead",
           "cockmunch", "cockmuncher", "cocks", "cocksuck", "cocksucked", "cocksucker", "cocksucking", "cocksucks",
           "cocksuka",
           "cocksukka", "cok", "cokmuncher", "coksucka", "coon", "cox", "crap", "cum", "cummer", "cumming", "cums",
           "cumshot",
           "cunilingus", "cunillingus", "cunnilingus", "cunt", "cuntlick", "cuntlicker", "cuntlicking", "cunts",
           "cyalis",
           "cyberfuc", "cyberfuck", "cyberfucked", "cyberfucker", "cyberfuckers", "cyberfucking", "d1ck", "damn",
           "dick",
           "dickhead", "dildo", "dildos", "dink", "dinks", "dirsa", "dlck", "dog-fucker", "doggin", "dogging",
           "donkeyribber",
           "doosh", "duche", "dyke", "ejaculate", "ejaculated", "ejaculates", "ejaculating", "ejaculatings",
           "ejaculation",
           "ejakulate", "f u c k", "f u c k e r", "f4nny", "fag", "fagging", "faggitt", "faggot", "faggs", "fagot",
           "fagots",
           "fags", "fanny", "fannyflaps", "fannyfucker", "fanyy", "fatass", "fcuk", "fcuker", "fcuking", "feck",
           "fecker",
           "felching", "fellate", "fellatio", "fingerfuck", "fingerfucked", "fingerfucker", "fingerfuckers",
           "fingerfucking",
           "fingerfucks", "fistfuck", "fistfucked", "fistfucker", "fistfuckers", "fistfucking", "fistfuckings",
           "fistfucks",
           "flange", "fook", "fooker", "fuck", "fucka", "fucked", "fucker", "fuckers", "fuckhead", "fuckheads",
           "fuckin",
           "fucking", "fuckings", "fuckingshitmotherfucker", "fuckme", "fucks", "fuckwhit", "fuckwit", "fudge packer",
           "fudgepacker", "fuk", "fuker", "fukker", "fukkin", "fuks", "fukwhit", "fukwit", "fux", "fux0r", "f_u_c_k",
           "gangbang", "gangbanged", "gangbangs", "gaylord", "gaysex", "goatse", "God", "god-dam", "god-damned",
           "goddamn",
           "goddamned", "hardcoresex", "hell", "heshe", "hoar", "hoare", "hoer", "homo", "hore", "horniest", "horny",
           "hotsex",
           "jack-off", "jackoff", "jap", "jerk-off", "jism", "jiz", "jizm", "jizz", "kawk", "knob", "knobead", "knobed",
           "knobend", "knobhead", "knobjocky", "knobjokey", "kock", "kondum", "kondums", "kum", "kummer", "kumming",
           "kums",
           "kunilingus", "l3i+ch", "l3itch", "labia", "lust", "lusting", "m0f0", "m0fo", "m45terbate", "ma5terb8",
           "ma5terbate",
           "masochist", "master-bate", "masterb8", "masterbat*", "masterbat3", "masterbate", "masterbation",
           "masterbations",
           "masturbate", "mo-fo", "mof0", "mofo", "mothafuck", "mothafucka", "mothafuckas", "mothafuckaz",
           "mothafucked",
           "mothafucker", "mothafuckers", "mothafuckin", "mothafucking", "mothafuckings", "mothafucks", "mother fucker",
           "motherfuck", "motherfucked", "motherfucker", "motherfuckers", "motherfuckin", "motherfucking",
           "motherfuckings",
           "motherfuckka", "motherfucks", "muff", "mutha", "muthafecker", "muthafuckker", "muther", "mutherfucker",
           "n1gga",
           "n1gger", "nazi", "nigg3r", "nigg4h", "nigga", "niggah", "niggas", "niggaz", "nigger", "niggers", "nob",
           "nob jokey",
           "nobhead", "nobjocky", "nobjokey", "numbnuts", "nutsack", "orgasim", "orgasims", "orgasm", "orgasms", "p0rn",
           "pawn",
           "pecker", "penis", "penisfucker", "phonesex", "phuck", "phuk", "phuked", "phuking", "phukked", "phukking",
           "phuks",
           "phuq", "pigfucker", "pimpis", "piss", "pissed", "pisser", "pissers", "pisses", "pissflaps", "pissin",
           "pissing",
           "pissoff", "poop", "porn", "porno", "pornography", "pornos", "prick", "pricks", "pron", "pube", "pusse",
           "pussi",
           "pussies", "pussy", "pussys", "rectum", "retard", "rimjaw", "rimming", "s hit", "s.o.b.", "sadist",
           "schlong",
           "screwing", "scroat", "scrote", "scrotum", "semen", "sex", "sh!+", "sh!t", "sh1t", "shag", "shagger",
           "shaggin",
           "shagging", "shemale", "shi+", "shit", "shitdick", "shite", "shited", "shitey", "shitfuck", "shitfull",
           "shithead",
           "shiting", "shitings", "shits", "shitted", "shitter", "shitters", "shitting", "shittings", "shitty", "skank",
           "slut",
           "sluts", "smegma", "smut", "snatch", "son-of-a-bitch", "spac", "spunk", "s_h_i_t", "t1tt1e5", "t1tties",
           "teets",
           "teez", "testical", "testicle", "tit", "titfuck", "tits", "titt", "tittie5", "tittiefucker", "titties",
           "tittyfuck",
           "tittywank", "titwank", "tosser", "turd", "tw4t", "twat", "twathead", "twatty", "twunt", "twunter", "v14gra",
           "v1gra",
           "vagina", "viagra", "vulva", "w00se", "wang", "wank", "wanker", "wanky", "whoar", "whore", "willies",
           "willy", "xrated",
           "xxx"]

sweartr = ["abaza", "abazan", "ag", "ağzına sıçayım", "ahmak", "allah", "allahsız", "am", "amarım", "ambiti", "am biti",
           "amcığı", "amcığın", "amcığını", "amcığınızı", "amcık", "amcık hoşafı", "amcıklama", "amcıklandı", "amcik",
           "amck", "amckl", "amcklama", "amcklaryla", "amckta", "amcktan", "amcuk", "amık", "amına", "amınako",
           "amına koy",
           "amına koyarım", "amına koyayım", "amınakoyim", "amına koyyim", "amına s", "amına sikem", "amına sokam",
           "amın feryadı", "amını", "amını s", "amın oglu", "amınoğlu", "amın oğlu", "amısına", "amısını", "amina",
           "amina g", "amina k", "aminako", "aminakoyarim", "amina koyarim", "amina koyayım", "amina koyayim",
           "aminakoyim",
           "aminda", "amindan", "amindayken", "amini", "aminiyarraaniskiim", "aminoglu", "amin oglu", "amiyum", "amk",
           "amkafa", "amk çocuğu", "amlarnzn", "amlı", "amm", "ammak", "ammna", "amn", "amna", "amnda", "amndaki",
           "amngtn", "amnn", "amona", "amq", "amsız", "amsiz", "amsz", "amteri", "amugaa", "amuğa", "amuna", "ana",
           "anaaann", "anal", "analarn", "anam", "anamla", "anan", "anana", "anandan", "ananı", "ananı", "ananın",
           "ananın am", "ananın amı", "ananın dölü", "ananınki", "ananısikerim", "ananı sikerim", "ananısikeyim",
           "ananı sikeyim", "ananızın", "ananızın am", "anani", "ananin", "ananisikerim", "anani sikerim",
           "ananisikeyim",
           "anani sikeyim", "anann", "ananz", "anas", "anasını", "anasının am", "anası orospu", "anasi", "anasinin",
           "anay",
           "anayin", "angut", "anneni", "annenin", "annesiz", "anuna", "aptal", "aq", "a.q", "a.q.", "aq.", "ass",
           "atkafası",
           "atmık", "attırdığım", "attrrm", "auzlu", "avrat", "ayklarmalrmsikerim", "azdım", "azdır", "azdırıcı",
           "babaannesi kaşar", "babanı", "babanın", "babani", "babası pezevenk", "bacağına sıçayım", "bacına", "bacını",
           "bacının", "bacini", "bacn", "bacndan", "bacy", "bastard", "basur", "beyinsiz", "bızır", "bitch", "biting",
           "bok", "boka", "bokbok", "bokça", "bokhu", "bokkkumu", "boklar", "boktan", "boku", "bokubokuna", "bokum",
           "bombok", "boner", "bosalmak", "boşalmak", "cenabet", "cibiliyetsiz", "cibilliyetini", "cibilliyetsiz",
           "cif",
           "cikar", "cim", "çük", "dalaksız", "dallama", "daltassak", "dalyarak", "dalyarrak", "dangalak", "dassagi",
           "diktim", "dildo", "dingil", "dingilini", "dinsiz", "dkerim", "domal", "domalan", "domaldı", "domaldın",
           "domalık",
           "domalıyor", "domalmak", "domalmış", "domalsın", "domalt", "domaltarak", "domaltıp", "domaltır",
           "domaltırım",
           "domaltip", "domaltmak", "dölü", "dönek", "düdük", "eben", "ebeni", "ebenin", "ebeninki", "ebleh",
           "ecdadını",
           "ecdadini", "embesil", "emi", "fahise", "fahişe", "feriştah", "ferre", "fuck", "fucker", "fuckin", "fucking",
           "gavad", "gavat", "geber", "geberik", "gebermek", "gebermiş", "gebertir", "gerızekalı", "gerizekalı",
           "gerizekali",
           "gerzek", "giberim", "giberler", "gibis", "gibiş", "gibmek", "gibtiler", "goddamn", "godoş", "godumun",
           "gotelek",
           "gotlalesi", "gotlu", "gotten", "gotundeki", "gotunden", "gotune", "gotunu", "gotveren", "goyiim", "goyum",
           "goyuyim",
           "goyyim", "göt", "göt deliği", "götelek", "göt herif", "götlalesi", "götlek", "götoğlanı", "göt oğlanı",
           "götoş",
           "götten", "götü", "götün", "götüne", "götünekoyim", "götüne koyim", "götünü", "götveren", "göt veren",
           "göt verir",
           "gtelek", "gtn", "gtnde", "gtnden", "gtne", "gtten", "gtveren", "hasiktir", "hassikome", "hassiktir",
           "has siktir",
           "hassittir", "haysiyetsiz", "hayvan herif", "hoşafı", "hödük", "hsktr", "huur", "ıbnelık", "ibina", "ibine",
           "ibinenin",
           "ibne", "ibnedir", "ibneleri", "ibnelik", "ibnelri", "ibneni", "ibnenin", "ibnerator", "ibnesi", "idiot",
           "idiyot",
           "imansz", "ipne", "iserim", "işerim", "itoğlu it", "kafam girsin", "kafasız", "kafasiz", "kahpe", "kahpenin",
           "kahpenin feryadı", "kaka", "kaltak", "kancık", "kancik", "kappe", "karhane", "kaşar", "kavat", "kavatn",
           "kaypak",
           "kayyum", "kerane", "kerhane", "kerhanelerde", "kevase", "kevaşe", "kevvase", "koca göt", "koduğmun",
           "koduğmunun",
           "kodumun", "kodumunun", "koduumun", "koyarm", "koyayım", "koyiim", "koyiiym", "koyim", "koyum", "koyyim",
           "krar",
           "kukudaym", "laciye boyadım", "lavuk", "liboş", "madafaka", "mal", "malafat", "malak", "manyak", "mcik",
           "meme",
           "memelerini", "mezveleli", "minaamcık", "mincikliyim", "mna", "monakkoluyum", "motherfucker", "mudik", "oc",
           "ocuu",
           "ocuun", "OÇ", "oç", "o. çocuğu", "oğlan", "oğlancı", "oğlu it", "orosbucocuu", "orospu", "orospucocugu",
           "orospu cocugu", "orospu çoc", "orospuçocuğu", "orospu çocuğu", "orospu çocuğudur", "orospu çocukları",
           "orospudur",
           "orospular", "orospunun", "orospunun evladı", "orospuydu", "orospuyuz", "orostoban", "orostopol", "orrospu",
           "oruspu",
           "oruspuçocuğu", "oruspu çocuğu", "osbir", "ossurduum", "ossurmak", "ossuruk", "osur", "osurduu", "osuruk",
           "osururum",
           "otuzbir", "öküz", "öşex", "patlak zar", "penis", "pezevek", "pezeven", "pezeveng", "pezevengi",
           "pezevengin evladı",
           "pezevenk", "pezo", "pic", "pici", "picler", "piç", "piçin oğlu", "piç kurusu", "piçler", "pipi", "pipiş",
           "pisliktir",
           "porno", "pornosu", "pussy", "puşt", "puşttur", "rahminde", "revizyonist", "s1kerim", "s1kerm", "s1krm",
           "sakso", "saksofon",
           "salaak", "salak", "saxo", "sakso", "sekis", "serefsiz", "sevgi koyarım", "sevişelim", "sexs", "sıçarım",
           "sıçtığım", "sıecem",
           "sicarsin", "sie", "sik", "sikdi", "sikdiğim", "sike", "sikecem", "sikem", "siken", "sikenin", "siker",
           "sikerim",
           "sikerler", "sikersin", "sikertir", "sikertmek", "sikesen", "sikesicenin", "sikey", "sikeydim", "sikeyim",
           "sikeym",
           "siki", "sikicem", "sikici", "sikien", "sikienler", "sikiiim", "sikiiimmm", "sikiim", "sikiir", "sikiirken",
           "sikik",
           "sikil", "sikildiini", "sikilesice", "sikilmi", "sikilmie", "sikilmis", "sikilmiş", "sikilsin", "sikim",
           "sikimde",
           "sikimden", "sikime", "sikimi", "sikimiin", "sikimin", "sikimle", "sikimsonik", "sikimtrak", "sikin",
           "sikinde",
           "sikinden", "sikine", "sikini", "sikip", "sikis", "sikisek", "sikisen", "sikish", "sikismis", "sikiş",
           "sikişen",
           "sikişme", "sikitiin", "sikiyim", "sikiym", "sikiyorum", "sikkim", "sikko", "sikleri", "sikleriii", "sikli",
           "sikm",
           "sikmek", "sikmem", "sikmiler", "sikmisligim", "siksem", "sikseydin", "sikseyidin", "siksin", "siksinbaya",
           "siksinler",
           "siksiz", "siksok", "siksz", "sikt", "sikti", "siktigimin", "siktigiminin", "siktiğim", "siktiğimin",
           "siktiğiminin",
           "siktii", "siktiim", "siktiimin", "siktiiminin", "siktiler", "siktim", "siktim", "siktimin", "siktiminin",
           "siktir",
           "siktir et", "siktirgit", "siktir git", "siktirir", "siktiririm", "siktiriyor", "siktir lan", "siktirolgit",
           "siktir ol git", "sittimin", "sittir", "skcem", "skecem", "skem", "sker", "skerim", "skerm", "skeyim",
           "skiim", "skik",
           "skim", "skime", "skmek", "sksin", "sksn", "sksz", "sktiimin", "sktrr", "skyim", "slaleni", "sokam",
           "sokarım",
           "sokarim", "sokarm", "sokarmkoduumun", "sokayım", "sokaym", "sokiim", "soktuğumunun", "sokuk", "sokum",
           "sokuş",
           "sokuyum", "soxum", "sulaleni", "sülaleni", "sülalenizi", "sürtük", "şerefsiz", "şıllık", "taaklarn",
           "taaklarna",
           "tarrakimin", "tasak", "tassak", "taşak", "taşşak", "tipini s.k", "tipinizi s.keyim", "tiyniyat", "toplarm",
           "topsun",
           "totoş", "vajina", "vajinanı", "veled", "veledizina", "veled i zina", "verdiimin", "weled", "weledizina",
           "whore",
           "xikeyim", "yaaraaa", "yalama", "yalarım", "yalarun", "yaraaam", "yarak", "yaraksız", "yaraktr", "yaram",
           "yaraminbasi",
           "yaramn", "yararmorospunun", "yarra", "yarraaaa", "yarraak", "yarraam", "yarraamı", "yarragi", "yarragimi",
           "yarragina",
           "yarragindan", "yarragm", "yarrağ", "yarrağım", "yarrağımı", "yarraimin", "yarrak", "yarram", "yarramin",
           "yarraminbaşı",
           "yarramn", "yarran", "yarrana", "yarrrak", "yavak", "yavş", "yavşak", "yavşaktır", "yavuşak", "yılışık",
           "yilisik",
           "yogurtlayam", "yoğurtlayam", "yrrak", "zıkkımım", "zibidi", "zigsin", "zikeyim", "zikiiim", "zikiim",
           "zikik", "zikim",
           "ziksiiin", "ziksiin", "zulliyetini", "zviyetini"]


def translate_tr_chars_to_en(name):
    tr_chars = ["ç", "ğ", "ı", "ö", "ş", "ü"]
    en_chars = ["c", "g", "i", "o", "s", "u"]
    TR_CHARS = ["Ç", "Ğ", "İ", "Ö", "Ş", "Ü"]
    EN_CHARS = ["C", "G", "I", "O", "S", "U"]

    for char in tr_chars:
        if char in name:
            name = name.replace(char, en_chars[tr_chars.index(char)])

    for CHAR in TR_CHARS:
        if CHAR in name:
            name = name.replace(CHAR, EN_CHARS[TR_CHARS.index(CHAR)])
    return name


def get_source(url):
    """Return the source code for the provided URL.

    Args:
        url (string): URL of the page to scrape.

    Returns:
        response (object): HTTP response object from requests_html.
    """

    try:
        session = HTMLSession()
        response = session.get(url)
        return response

    except requests.exceptions.RequestException as e:
        print(e)


def scrape_google(query):
    query = urllib.parse.quote_plus(query)
    response = get_source("https://www.google.com.tr/search?q=" + query)

    links = list(response.html.absolute_links)
    return links


def get_results(query):
    query = urllib.parse.quote_plus(query)
    response = get_source("https://www.google.com.tr/search?q=" + query)
    return response


def parse_results(response):
    css_identifier_result = ".jtfYYd"
    css_identifier_title = "h3"
    css_identifier_link = ".yuRUbf a"
    css_identifier_text = ".VwiC3b"
    results = response.html.find(css_identifier_result)
    output = []

    for result in results:
        item = {}
        try:
            item = {

                'title': result.find(css_identifier_title, first=True).text,
                'link': result.find(css_identifier_link, first=True).attrs['href'],
                'text': result.find(css_identifier_text, first=True).text

            }
        except:
            pass
        output.append(item)

    return output


def google_search(query):
    response = get_results(query)
    return parse_results(response)


def exportinstagram(name, json_file):
    results = google_search(name + " instagram")

    output = ""
    for result in results:

        if ("instagram" in result['link']):
            if (result['link'].endswith("?hl=tr")):
                result['link'] = result['link'][:-6]
                if result['link'].endswith('/'):
                    temp = result['link'][0:-1]
                    output = temp.split('/')[-1]




                else:
                    output = result['link'].split('/')[-1]



            else:
                if result['link'].endswith('/'):
                    temp = result['link'][0:-1]
                    output = temp.split('/')[-1]


                else:

                    output = result['link'].split('/')[-1]

            return output
    return ""


def exporttwitter(name, json_file):
    results = google_search(name + " twitter")

    for result in results:
        if "twitter" in result['link'] and "search?q" not in result['link']:
            return result['link'].split('/')[-1]
    return ""


"""def exporttiktok(name,results):
    i=0
    for result in results:
        if("www.tiktok.com/@" in result['link'] and i<3):
            with open("tiktok.txt", "a") as myfile:
                myfile.write(name +" : "+ result['link'].split('/')[-1] + "\n")
        i+=1
"""


def searcher(name, shame):
    search_result = list()
    for a in shame:
        result = google_search(name + " " + a)
        search_result.append(result)
    return search_result


def censor(swearen, sweartr, search_result):
    allresult = list()

    for search_results_to_censor in search_result:
        for search_result_to_censor in search_results_to_censor:
            templist = search_result_to_censor['title'].split(" ")
            for i in range(len(templist)):
                if templist[i].lower() in swearen or templist[i].lower() in sweartr:
                    templist[i] = str("*" * len(templist[i]))
            search_result_to_censor['title'] = " ".join(templist)
            allresult.append(search_result_to_censor['title'])
    return allresult


def shuffler(result):
    tempresult = result.copy()
    mixed_results = list()
    len_res = len(tempresult)

    for i in range(len_res):
        j = random.randrange(0, len(tempresult))
        a = tempresult.pop(j)
        mixed_results.append(a)

    return mixed_results


def indexer(name, mixed_results):
    en_name = translate_tr_chars_to_en(name)

    token_name = en_name.lower().split(" ")
    last_results = list()
    result_dict = dict()

    for a in mixed_results:
        result_dict[a] = 0

    for element in mixed_results:
        for name_partial in token_name:
            en_element = translate_tr_chars_to_en(element)
            temp = en_element.lower()
            if name_partial in temp:
                result_dict[element] += 1

    for elem in mixed_results:
        en_elem = translate_tr_chars_to_en(elem)
        temp = en_elem.lower()
        if en_name.lower() in temp:
            result_dict[elem] += 1

    for i in range(len(token_name) + 1, -1, -1):
        for element in result_dict:
            if result_dict[element] == i:
                last_results.append(element)

    return last_results


def export_search_result(search_results, last_results):
    temp_search_results = list()
    for i in search_results:
        for a in i:
            temp_search_results.append(a)

    final_temp_search_result = list()
    final_temp_search_result.append(temp_search_results[0])
    for tmp in temp_search_results:
        exists = False
        for tmp2 in final_temp_search_result:
            if tmp2['title'] == tmp['title']:
                exists = True

        if not exists:
            final_temp_search_result.append(tmp)

    file = open("search_result.json", "w", encoding="utf-8")
    last_output = dict()
    a = 0
    for result in last_results:
        for i in final_temp_search_result:
            if i['title'] == result:
                try:
                    output = {
                        "title": i['title'],
                        "link": i['link'],
                        "text": i['text']
                    }
                    last_output[a] = output
                    a += 1
                except:
                    pass
    last_arr = [last_output]
    json.dump(last_arr, file, ensure_ascii=False)


def mainFunction(name, shame, swearen, sweartr):
    file = open("social_media.json", "w", encoding="utf-8")
    search_results = searcher(name, shame)
    result = list(set(censor(swearen, sweartr, search_results)))
    mixed_results = shuffler(result=result)
    last_results = indexer(name, mixed_results)
    export_search_result(search_results, last_results)
    insta = exportinstagram(name, file)
    twitter = exporttwitter(name, file)
    output_social_media = {
        "instagram": insta,
        "twitter": twitter
    }
    json.dump(output_social_media, file, ensure_ascii=False)


start = datetime.now().time()  # time object

mainFunction(name, shame, swearen, sweartr)

end = datetime.now().time()  # time object

start_hour = int(str(start).split(":")[0]) * 3600000
start_minute = int(str(start).split(":")[1]) * 60000
start_second = int(str(start).split(":")[2].split(".")[0]) * 1000
start_msecond = int(str(start).split(".")[1][:3])

end_hour = int(str(end).split(":")[0]) * 3600000
end_minute = int(str(end).split(":")[1]) * 60000
end_second = int(str(end).split(":")[2].split(".")[0]) * 1000
end_msecond = int(str(end).split(".")[1][:3])

print(((end_hour+end_minute+end_second+end_msecond)-(start_hour+start_minute+start_second+start_msecond))/1000)


