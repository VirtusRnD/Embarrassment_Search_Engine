import data from "./search_result.json" assert { type: "json" };


var result_list = [];
class SearchResult{
    constructor(link,title,text) {
        this.link = link;
        this.title = title;
        this.text = text;
    }
}


export function loadData(){

    let i = 0;

    while (true){
        try {
            let tempResult = new SearchResult(data[0][i]['link'],data[0][i]['title'],data[0][i]['text']);
            result_list.push(tempResult);
        }
        catch(err) {
            break
        }
        i++;
    }

    var resultDiv = document.getElementById("results");

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
        resultDiv.appendChild(queryResultDiv);
    }
}

