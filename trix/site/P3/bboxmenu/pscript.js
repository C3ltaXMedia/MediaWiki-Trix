$(document).ready(function(){ 
$('#box').bounceBox(); 
$('a.wb-u-inv').click(function(e){ 
$('#box').bounceBoxToggle(); e.preventDefault(); }); 
$('#box').click(function(){ 
$('#box').bounceBoxHide(); });});
