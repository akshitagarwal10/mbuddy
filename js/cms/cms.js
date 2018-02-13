function createTag(){
	var tagName = $('#tagnameTag').val();

	 if(tagName == null || tagName == ""){
		$('#tagNameError').hide(500);
		$('#tagNameError').html('Name field can not be empty');
		$('#tagNameError').show(500);
		return false;
	 }

	 $.ajax({
	   url: "http://localhost/mbuddy/index.php/cms/dashboard/createTag/",
	   data: {
	 		'tagName' : tagName,
	 	 },
	   dataType: "json",
	   success: function(result){
	 	 if(result == "true"){
	 		$('#tagNameError').hide(100);
	 		$('#tagNameError').html('Tag Created Successfully');
	 		$('#tagNameError').show(500);
	 	 }
	 	 else if(result == "Error"){
	 		$('#tagNameError').hide(100);
	 		$('#tagNameError').html('Some error ocurred, please try again later');
	 		$('#tagNameError').show(500);
	 	 }
	 	 else {
	 		$('#tagNameError').hide(100);
	 		$('#tagNameError').html(result);
	 		$('#tagNameError').show(500);
	 	 }
	   
	  },
	   type: "POST"

	 });

}

function addLeads(key){
	var selector = key + 'name' + key.charAt(0).toUpperCase() + key.slice(1);
	var errorSelector = key + 'NameError';
	var input = $('#' + selector).val();

	 if(input == null || input == ""){
		$('#' + errorSelector).hide(500);
		$('#' + errorSelector).html('Name field can not be empty');
		$('#' + errorSelector).show(500);
		return false;
	 }

	 $.ajax({
	   url: "http://localhost/mbuddy/index.php/cms/dashboard/addLeads/",
	   data: {
	 		'input' : input,
	 		'key'	: key
	 	 },
	   dataType: "json",
	   success: function(result){
	 	 if(result == "true"){
	 		$('#' + errorSelector).hide(100);
	 		$('#' + errorSelector).html(key.charAt(0).toUpperCase() + key.slice(1) + ' created successfully');
	 		$('#' + errorSelector).show(500);
	 	 }
	 	 else if(result == "Error"){
	 		$('#' + errorSelector).hide(100);
	 		$('#' + errorSelector).html('Some error ocurred, please try again later');
	 		$('#' + errorSelector).show(500);
	 	 }
	 	 else {
	 		$('#' + errorSelector).hide(100);
	 		$('#' + errorSelector).html(result);
	 		$('#' + errorSelector).show(500);
	 	 }
	   
	  },
	   type: "POST"

	 });

}

$(document).ready(function(){
	$("#tagButton").click(function(){
		  $("#tagModal").modal();
	 });

	$("createTagSubmit").click(function(){
		createTag();
	});

	$("#artistButton").click(function(){
		  $("#artistModal").modal();
	 });

	$("#singerButton").click(function(){
		  $("#singerModal").modal();
	 });

	$("#writerButton").click(function(){
		  $("#writerModal").modal();
	 });

	$("#composerButton").click(function(){
		  $("#composerModal").modal();
	 });

	$("#producerButton").click(function(){
		  $("#producerModal").modal();
	 });

	$("#createTagSubmit").unbind('click').click(function(){
		createTag();
	 });

	$("#createArtistSubmit").unbind('click').click(function(){
		addLeads('artist');
	 });

	$("#createSingerSubmit").unbind('click').click(function(){
		addLeads('singer');
	 });

	$("#createWriterSubmit").unbind('click').click(function(){
		addLeads('writer');
	 });

	$("#createComposerSubmit").unbind('click').click(function(){
		addLeads('composer');
	 });

	$("#createProducerSubmit").unbind('click').click(function(){
		addLeads('producer');
	 });

});