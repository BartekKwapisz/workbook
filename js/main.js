 /*$.cookie("test", 1);

var cookieValue = $.cookie("test");

$("#form-submit").click(function(){
   
    
   alert(cookieValue);
 });
 


 https://stackoverflow.com/questions/11841771/keep-a-javascript-variables-value-after-a-page-refresh
 
 
 
 */



let app = Vue.createApp({
   data(){
        return {
           content: '<h1>Welcome to workbook.io, where employment agencies and enterpreneurs can find workers and jobs.</h1>'
        }
   },
   methods: {
   }
});
const vue = app.mount("#app");


