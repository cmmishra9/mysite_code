// document.write("<h1>External Javascript<h1>");

// // alert("hi, how are you?"
// function msg(){
//     alert("Hello friend, chai pi lo");  
// }

// //dsfdsafadsfa
// /*
// dafdfsa
// dfsdafsad 
// fdsfsadfdas 
// */

// var x=10;
// var name = "Hello";
// var hut= false;
// var kuchhnahi = null;
// var y=10;
// const test=444;
// let q=444;

// var z=x+y;
// window.chandan=90;


// // operators
// // compare

// // & => bitwise AND

// // | => bitwise OR

// // ^ => XSLTProcessor

// // ~ NOT
// // <<  =>  (10<<2)=40 LEFT

// // RIGHT  >>  (10>>2)= 2

// // 1010 
// // 10100
// // 101000

// // i++;
// // i=i+1;
// // i+=1;
// const istrue=true;
// let statment= (istrue)? "true statement": "false statement";

// // setInterval(() => {
// //     document.location="https://www.google.com";
// // }, 10000);

// let num=document.getElementById('num')
// // console.log(num.value)
// // if( num.value>=10 ){
// //     console.log(`${num.value} is greater`)
// // }else{
// //     console.log(`${num.value} is smaller`)
// // }

// // var grade='B';  
// // var result;  
// // switch(grade){  
// //     case 'A':  
// //         result="A Grade";  
// //         break;  
// //     case 'B':  
// //         result="B Grade";  
// //         break;  
// //     case 'C':  
// //         result="C Grade";  
// //         break;  
// //     default:  
// //         result="No Grade";  
// // }  
// // document.write(result);  
// // for loop

// function boxcolor(){
//   let boxfff=document.getElementById("num");
//   boxfff.style.width()
// }

// // let roma={
// //     id:12,
// //     name:"Roma",
// //     salary:4999.99,
// //     isfemale:true,
// //     gender:{
// //         m: "male",
// //         f:"female"
// //     }
// // };
// // function emp(id, name, salary,isfemale, gender){
// //     this.id=id;
// //     this.name=name;
// //     this.salary=salary;
// //     this.isfemale=isfemale;
// //     this.gender=checkgender(isfemale);

// //     function checkgender( obj){
// //         if(obj){
// //             return "female";
// //         }else{
// //             return "male";
    
// //         }
// //     }
// // }

// // let roma = new emp(12, "Roma", 40000, true, "female");
// // let mohan = new emp(12, "mohan", 40000, false, "male");
// // document.write(roma.id +" "+roma.name+" "+roma.salary+" "+ roma.gender)

// let myarr= ["apple", "sdfdsfa", "dasfddsf", "asdff"];
// console.log(myarr[0]);
// console.log(myarr[myarr.length - 1]);

var person ={
    fName:"chandan",
    age:26,
    gender:"male",
    contactInfo:{
        mobile:"8896958466",
        email:"chandanmshr476@gmail.com",
        altmob:"xxxxxxxxxxxx",
        address:{
            prmaddr:{
                addrline1:"s248, indiranagar",
                addrline2:"s248, indiranagar"
            },
            postaddr:{
                addrline1:"s248, indiranagar",
                addrline2:"s248, indiranagar"
            }
        }
    }

}

// // document.write(person.contactInfo.address.postaddr);
//  for(var i in person.contactInfo.address.postaddr){
//      document.write(person.contactInfo.address.postaddr[i]+"<br/>")
//  }

// document.write(person["age"]);

// alert(document.documentElement.getAttribute("lang"));

// document.body.style.background="blue";


// const elem=document.getElementById("intro");

// elem.style.color="blue";
// elem.style.fontSize="18px";
// elem.style.fontWeight="bold";
// elem.style.fontStyle="italic";

var mylink=document.getElementById("mylink");

var href = mylink.getAttribute("href");
// alert(href)

const logo= document.getElementById("logo");

logo.setAttribute("src","https://picsum.photos/300")
logo.setAttribute("alt","random photo")

const himg=document.getElementById("himg")

himg.addEventListener("click", ()=>{
    logo.toggleAttribute("class", "hide")
});

const main = document.getElementById("main");

var newDiv = document.createElement("div");

var newContent = document.createTextNode("Hi, How are you?");

newDiv.appendChild(newContent);

main.appendChild(newDiv);

// document.body.innerHTML=newDiv.innerHTML;


















