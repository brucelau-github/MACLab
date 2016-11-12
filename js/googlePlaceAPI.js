function queryAutoComplete(keyword){
  var url = "autoComplete.php";
  var param = {
    input: keyword
  };
  $.get(url,param,function(data,status){
    console.log(data);
  });
}
