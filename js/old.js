/*let objects = []; //data from mySQL database 

function ajaxCallBack(result){
    objects = []; //clear objects
    let arrayWithJsons = result.split(/(?<=})/);
    for (let i=0; i<arrayWithJsons.length; i++){
        objects.push(JSON.parse(arrayWithJsons[i]));
    }
    vue.updateContent();
}

function runPHP (address) {
    $.ajax({
      url:"../x2/php/"+address+".php",  
      type: "POST",
      success:function(result){
       ajaxCallBack(result);
      }
    });


let app = Vue.createApp({
    data(){
         return {
            content: '<h1>Welcome to workbook.io, where employment agencies and enterpreneurs can find workers and jobs.</h1>'
         }
    },
    methods: {
         updateContent(){
             let tableContent = ""
             function takeFromObjects(){
                 for(let i = 0; i<objects.length; i++) {
                    tableContent = tableContent.concat(
                         `<tr><td>`+objects[i].title+`</td>
                         <td>`+objects[i].salary+`</td>
                         <td>`+objects[i].country+`</td>
                         </tr>`
                     )
                 };
                  
             };
             takeFromObjects()
             this.content = `
             <table>
                     <tr>
                         <th>Title</th>
                         <th>Salary</th>
                         <th>Country</th>
                     </tr>
                     `+tableContent+`
             </table>`
         },
         homePage(){
             this.content = '<h1>Welcome to workbook.io, where employment agencies and enterpreneurs can find workers and jobs.</h1>';
         },
         searchWorkers(){
             runPHP('searchWorkers');
         },
         offerJobs(){
             this.content = `
             <form action="php/insertJob.php" method="POST">  
                     <input type="text" name="title" placeholder="title"> <br>
                     <input type="text" name="country" placeholder="country"> <br> 
                     <input type="text" name="salary" placeholder="salary"> <br> 
                     <button type="submit" name="submit">Add</button>
             </form> 
             <form action="php/delete.inc.php" method="POST">
                     <button type="submit" name="submit">delete all</button>
             </form>`
         },
         offerWorkers(){
             this.content = `
             <form action="php/insertWorker.php" method="POST">  
                     <input type="text" name="title" placeholder="title"> <br>
                     <input type="text" name="country" placeholder="country"> <br> 
                     <input type="text" name="salary" placeholder="salary"> <br> 
                     <button type="submit" name="submit">Add</button>
             </form> 
             <form action="php/delete.inc.php" method="POST">
                     <button type="submit" name="submit">delete all</button>
             </form>`
         },
         searchJobs(){
             runPHP('searchJobs');
         },
         account(){
             this.content = `
             
             <h2>Login</h2>
             <form action="php/logIn.php" method="POST"> 
                 <input type="text" name="uid" placeholder="Username/email">
                 <input type="password" name="pwd" placeholder="Password"> 
                 <button type="submit" name="submit">Log in</button>
             </form>
             <form action="php/logOut.php" method="POST">  
                 <button type="submit" name="submit">Log out</button>
             </form>
             <h2>Sign up</h2>
             <form action="php/signUp.php" method="POST">
                 <input type="text" name="name" placeholder="Full Name">
                 <input type="text" name="email" placeholder="email">
                 <input type="text" name="uid" placeholder="Username">
                 <input type="password" name="pwd" placeholder="Password">
                 <input type="password" name="pwdrepeat" placeholder="Repeat password">
                 <button type="submit" name="submit">Sign up</button>
             </form>
             `
         }
    }
 });
 const vue = app.mount("#app");
 } */