var result_list = [];
class SearchResult{
    constructor(link,title,text) {
        this.link = link;
        this.title = title;
        this.text = text;
    }
}

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}





async function loadData(){
    readTextFile("/search_result.json", function(text){
        let data = JSON.parse(text);
        alert(data)
        let length=Object.keys(data).length;
        for (let i = 0; i <length; i++) {
            alert(i)
            let tempResult = new SearchResult(data[i]['link'],data[i]['title'],data[i]['text']);
            result_list.push(tempResult);
        }
    });

    var resultDiv = document.getElementById("results");
    alert("afterres")
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
        alert(title);
        linkCite.appendChild(linkSpan);
        linkA.appendChild(linkCite);
        linkA.appendChild(title);
        queryResultDiv.appendChild(linkA);
        queryResultDiv.appendChild(textSpan);
        resultDiv.appendChild(queryResultDiv);


    }


}

