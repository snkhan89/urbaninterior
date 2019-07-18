// JavaScript Document
//$(function() {
//$(".deleteme12").click(function(e) {
//e.preventDefault();	
//  if (confirm('Are you sure you want to delete ? '))
//  {
//	   var a=$(this).attr("val");
//	   delete_roww(a);
//       return true;
//  }
//  else
//  {
//      return false;
//  }
//});
//});

function delete_roww(a,b)
{
	 if (confirm('Are you sure you want to delete ? '))
  {
	    event.preventDefault();
		var csrf=$('input[name="admin_token"]').val();	
		var type="POST";
		var onSuccess=del_sucess;
		var onFailed=failure;
		var path=baseurl+"delete/"+b;
		//alert(path);
		var jsonData={admin_token:csrf,del_id:a};
		//var jsonData=$("#login").serialize();
		GetUrlResponse(path,type,jsonData,onSuccess,onFailed);
        return true;
  }
  else
  {
      return false;
  }
}



function del_sucess(data)
{
	if(data==1)
	{
		$("#error_msgs").html("<p class=success>Delete sucessfully</p>");
		window.location.reload();
	}
	else if(data==2)
	{
		$("#error_msgs").html("<p class=err>Not Delete sucessfully</p>");
	}
	else
	{
		$("#error_msgs").html(data);
	}
}




function change_statss(x,y,z)
{
	 if (confirm('Are you sure you want to change status? '))
  {
	    event.preventDefault();
		var csrf=$('input[name="admin_token"]').val();	
		var type="POST";
		var onSuccess=change_stat_sucess;
		var onFailed=failure;
		var path=baseurl+"Change_status/"+z;
		
		var jsonData={admin_token:csrf,id:x,status:y};
		//var jsonData=$("#login").serialize();
		
		GetUrlResponse(path,type,jsonData,onSuccess,onFailed);
		
        return true;
  }
  else
  {
      return false;
  }
}



function change_stat_sucess(data)
{
	if(data==1)
	{
		$("#error_msgs").html("<p class=success>Status change sucessfully</p>");
		window.location.reload();
	}
	else if(data==2)
	{
		$("#error_msgs").html("<p class=err>Not change sucessfully</p>");
	}
	else
	{
		$("#error_msgs").html(data);
	}
}