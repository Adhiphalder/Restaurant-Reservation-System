let mainrepimg = document.querySelector(".left")



async function getImg(){
    let a = await fetch("http://127.0.0.1:5501/images2/")
    let b = await a.text()
    console.log(b);
    
    let c = document.createElement("div")
    c.innerHTML = b
    let d = c.getElementsByTagName("a")
    let arr =[]
    for (let index = 0; index < d.length; index++) {
        const element = d[index];
        if(element.href.endsWith(".jpg")){
            arr.push(element.href)
        }
    }
    return arr
}


async function main() {
    let imgArr = await getImg()

    for (let index = 0; index < imgArr.length; index++) {
        const element = imgArr[index];
        console.log(element);
        let img = document.createElement("img")
        img.src = `${element}`;
        mainrepimg.innerHTML = img;
    }
}

main()