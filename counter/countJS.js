//Button event handlers and content checker function
const upOne = document.getElementById("upOne")
const upTwo = document.getElementById("upTwo")
const count = document.getElementById("count")
let countDisp = 0
upOne.addEventListener("click",() => {
    countDisp += 1
    count.innerText = countDisp
    checkTen()
    changeBackg()
})
upTwo.addEventListener("click",() => {
    countDisp += 2
    count.innerText = countDisp
    checkTen()
    changeBackg()
})
function checkTen(){
    if(countDisp == 10){
        countDisp = 0
        count.innerHTML = countDisp
    }
}
function changeBackg(){
    var randomColor = Math.floor(Math.random()*16777215).toString(16);
    document.body.style.backgroundColor = '#' + randomColor
}
//React
const reactContentRoot = document.getElementById("fil")
const newEl = React.createElement("li",null,"item1")
ReactDOM.render(newEl,reactContentRoot)