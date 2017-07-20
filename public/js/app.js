console.log("app.js");
var base_url = 'http://localhost/swahili/'


 
 

$(function() {
   // Initializes and creates emoji set from sprite sheet
   window.emojiPicker = new EmojiPicker({
emojiable_selector: '[data-emojiable=true]',
assetsPath: base_url+"public/img/",
popupButtonClasses: 'fa fa-smile-o'
   });
   window.emojiPicker.discover();
});

$(".replies.yes p").click(function(){
   $(".chats.inner-chat-here").toggle();
}); 
