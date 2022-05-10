import search_results from "./search_result.json" assert { type: "json" };
import image_information from "./image_information.json" assert { type: "json" };

var result_list = [];
var image_list = [];

class SearchResult{
    constructor(link,title,text) {
        this.link = link;
        this.title = title;
        this.text = text;
    }
}

class ImageInfo{
    constructor(link,image,description) {
        this.link = link;
        this.image = image;
        this.description = description;
    }
}


export function loadData(){

    // Images:

    let i = 0;

    var total_nsfw = 0.0;

    while (true){
        try {
            let tempImage = new ImageInfo(image_information[0][i][0],image_information[0][i][1],image_information[0][i][2]);
            if (tempImage.description!==""){
                let score = parseFloat(tempImage.description.split("<br>")[0].split(": ")[1]);

                total_nsfw+=score;

                if(score>0.25){
                    tempImage.image = "images/NSFW.jpg";
                }
                image_list.push(tempImage);
            }
        }
        catch(err) {
            break
        }
        i++;
    }

    var imageResultsDiv = document.getElementById("image_results");

    if(image_list.length===0){
        imageResultsDiv.style.display = "none";
    }else {
        for (let i = 0; i < image_list.length; i++) {
            let imageResultDiv = document.createElement("div");
            let linkImage = document.createElement("a");
            let image = document.createElement("img");
            let descDiv = document.createElement("div");
            let descElem = document.createElement("span");

            imageResultDiv.classList.add("image_result");
            image.classList.add("image_result_image");
            descDiv.classList.add("image_result_desc");

            descElem.innerHTML = image_list[i].description;
            descDiv.appendChild(descElem);

            linkImage.href = image_list[i].link;

            image.src = image_list[i].image;

            linkImage.appendChild(image);

            imageResultDiv.appendChild(linkImage);
            imageResultDiv.appendChild(descDiv);

            imageResultsDiv.appendChild(imageResultDiv);
        }
    }

    // Links:

    let j = 0;

    while (true){
        try {
            let tempResult = new SearchResult(search_results[0][j]['link'],search_results[0][j]['title'],search_results[0][j]['text']);
            result_list.push(tempResult);
        }
        catch(err) {
            break
        }
        j++;
    }

    var queryResultsDiv = document.getElementById("query_results");

    for (let i = 0; i < result_list.length; i++) {
        let queryResultDiv = document.createElement("div");
        let linkA = document.createElement("a");
        let linkCite = document.createElement("cite");
        let linkSpan = document.createElement("span");
        let title = document.createElement("h3");
        let textSpan = document.createElement("span");

        queryResultDiv.classList.add("queryResult");
        title.classList.add("queryResultTitle");
        linkA.href = result_list[i]['link'];
        let splittedLink = result_list[i]['link'].split("/");
        let linkCiteString = splittedLink[0]+splittedLink[1]+splittedLink[2];
        let linkCiteText = document.createTextNode(linkCiteString);
        linkCite.appendChild(linkCiteText);
        let threeDots = document.createTextNode("...");
        linkSpan.appendChild(threeDots);
        let descriptionText = document.createTextNode(result_list[i]['text']);
        textSpan.appendChild(descriptionText);
        let titleText = document.createTextNode(result_list[i]['title']);
        title.appendChild(titleText);
        linkCite.appendChild(linkSpan);
        linkA.appendChild(linkCite);
        linkA.appendChild(title);
        queryResultDiv.appendChild(linkA);
        queryResultDiv.appendChild(textSpan);
        queryResultsDiv.appendChild(queryResultDiv);
    }


    let h_four_counter = document.createElement("h4");
    let count = result_list.length;
    let counter = document.createTextNode("There are "+ count +" results.");
    h_four_counter.appendChild(counter);
    document.getElementById("query_timer_n_counter").appendChild(h_four_counter);

    let shame_bar = document.getElementById("shame_bar");

    shame_bar.value = (total_nsfw/image_list.length)*100;

    let shame_bar_span = document.getElementById("shame_bar_span");

    shame_bar_span.innerText = ""+parseInt((total_nsfw/image_list.length)*100) + "%";


}