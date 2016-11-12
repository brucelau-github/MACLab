function queryAutoComplete(keyword){
  var url = "http://www.localhost.com/autoComplete.php";
  var param = {
    input: keyword
  };
  $.get(url,param,function(data,status){
    console.log(data);
  });
}
