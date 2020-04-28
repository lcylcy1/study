refresh();
            function  refresh(){
                $.ajax({
                    url:"../php/tableController.php",
                    type:"get",
                    success: function (res) {
                        var data = jQuery.parseJSON(res);
                        console.log(data);
                        var str = "";
                        for(var i=0;i<data.length;i++){
                            str = "<tr><td>"+data[i].Student_ID+"</td><td>"+data[i].Full_Name+"</td><td>"+data[i].Sex+"</td><td>"+data[i].Age+"</td><td>"+data[i].Brthday+"</td><td>"+data[i].Political_Outlook+"</td><td>"+data[i].phone_number+"</td><td>"+data[i].Home_address+"</td><td>"+data[i].E_mail+"</td><td><button class='btn btn-primary btn-xs' id='change' data-toggle='modal' data-target='myModal'>修改</button><button class='btn btn-danger btn-xs' id='del' style='margin-left: 5px'>删除</button></td></tr>";
                           $("table>tbody").append(str)
                        }
                    }
                })
            };

  var a = 0;
  $(document).on("click","#change",function(){
      $('#myModal').modal()
       a = $(this).parents("tr").index() //全局a用来查找当前的下表
       $(this).parents("tr").find("td:not(:last-child)").each(function () {
           var s = $(this).text()
           var b = $(this).index()

           if(b>0){
               $("#myModal .ss[data-index='"+b+"']").val(s)
           }else{
               $("#myModal .ss[data-index='"+b+"']").text(s)
           }
       })

  })
  $(document).on("click","#del", function () {
    var _this = $(this)

    $.ajax({
        url:"../php/del.php",
        type:"POST",
        data:{
            val:"del",
            id:_this.parents("tr").find("td:eq(0)").text()
        },
        success: function (res) {
            if(res=="1"){
                _this.parents("tr").remove()
            }else{
                alert("删除失败")
            }
        }
    })

})

$(document).on("click","#sign",function(){
    var data1 = $("#form").serialize()
    var t = $("#myModalLabel").text()
    $("#myModal").find("input").each(function () {
       var q = $(this).val()
       var s = $(this).data("index")
        $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
    })
    $.ajax({
        url:"../php/change.php?id="+t,
        type:"POST",
        data:data1,
        success:function(res){
            console.log(res);
        }
    })
})


