$(document).ready(function () {

  $("#formtaolopmonhoc").on("submit", function (e) {
    e.preventDefault();

    var idlopmonhoc = $("input[name=idlophoc]").val();
    var mon = $("#selectmon")
      .find(":selected")
      .attr("IdMon");
    console.log(idlopmonhoc + "  " + mon);

    $.ajax({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      type: "POST",
      url: "/ajaxthemmonhoc",
      data: {
        IdLopMonHoc: idlopmonhoc,
        IdMon: mon
      },
      success: function (html) {
        toastr.success(
          `Thêm Thành Công Lớp Môn Học Có Id là: ${idlopmonhoc} `, {
            timeOut: 2000
          }
        );
        $("[type=reset]").click();
        $(".notice-sucess").remove();
      },
      error: function (error) {
        toastr.error(`Error rồi bạn ê : (( ,Thử gmail khác xem!!!`, {
          timeOut: 2000
        });
      }
    });
  });

var Arrayclone=[]

  $(".createLopMonHocClick").on("click", function () {
    var arrayLop = [];
    var arrayMon = [];
   
  var arrayIdLopMonHoc = [];
    $(".checklop input:checked").each(function () {
      let idlop = $(this).attr("idlop");
      arrayLop.push(idlop);
    });
    $(".checkmon input:checked").each(function () {
      let idmon = $(this).attr("idmon");
      arrayMon.push(idmon);
    });
    for (let i = 0; i < arrayLop.length; i++) {
      var string = "N";
      string += "0-" + arrayLop[i];

      for (let j = 0; j < arrayMon.length; j++) {
        var prefix = string + "-";
        prefix += +arrayMon[j] + "-" + randomString();
        arrayIdLopMonHoc.push(prefix);


      }

    }
    Arrayclone = arrayIdLopMonHoc;

    var HTML = "";
    for (let i = 0; i < arrayIdLopMonHoc.length; i++) {
      var idmon = arrayIdLopMonHoc[i].split("-")[2];
      console.log(idmon);
      HTML += `<div class="m-widget4__item">
												
												<div class="m-widget4__info">
													<span class="m-widget4__text">
													<b>Id LMH</b> <i style="color:red">${arrayIdLopMonHoc[i]}</i>	| <b>Id Môn</b> <i style="color:red" >${idmon}</i>
													</span>
												</div>
												
											</div>`;
    }
    $(".listLopMonHocNewCreate").html(HTML);
   
  });
  //end click tạo lớp môn học bao gốm tạo id và thay đổi html nút
$(".btn-themlopmonhoc").on("click", function() {
    let coutlopMonHocNew = Arrayclone.length;
   
   
    let flag = confirm(`Xác Nhận thêm ${coutlopMonHocNew} Lớp Môn Học này vào Cơ sở dữ liệu. Thực hiện xong mà nhầm thì đi xóa sẽ rất mệt đấy ~~!!`);
    if (flag) {
      $.ajax({
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        type: "POST",
        url: "/ajaxautothemlopmonhoc",
        data: {
          ArrayIdLopMonHoc: Arrayclone
        },
        success: function(html) {
          for (let i = 0; i < coutlopMonHocNew; i++) {
            toastr.success(
              `Thêm Thành Công Lớp Môn Học Có Id là: ${Arrayclone[i]} `,
              {
                timeOut: 800
              }
            );
          }

          $("[type=reset]").click();
        },
        error: function(error) {
          toastr.error(`Error rồi bạn ê : ((`, {
            timeOut: 2000
          });
        }
      });
    }
  
  });
  var randomString = (number = 4) => {
    var text = "";
    var possible = "1234567890WQERTYUIOPASDFGHJKLZXCVBNMLKJHGFDWERTYUIKMNBVCXSERTHN";
    for (var i = 0; i < number; i++) {
      text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return text;
  }
  $("#FormSubmitLopHoc").on('submit',function(e){
      e.preventDefault();

      var tenlop = $("input[name=tenlop]").val();
    
      
      var khoahoc = $("#selectKhoaHoc")
        .find(":selected")
        .attr("idkhoahoc");

      $.ajax({
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        type: "POST",
        url: '/ajaxthemlophoc',
        data: {
          khoahoc:khoahoc,
          tenlop:tenlop
        },
        success: function(html) {
          toastr.success(
            `Thêm Thành Công Lớp học ${tenlop}, Khóa ${khoahoc} `,
            {
              timeOut: 1000
            }
          );
          $("[type=reset]").click();
        
        },
        error: function(error) {
          toastr.error(`Error rồi bạn ê : (( ,Thử gmail khác xem!!!`, {
            timeOut: 1000
          });
        }
      });
  });
  
  $("#FormMon").on("submit", function(e) {
    e.preventDefault();

    var tenmon = $("input[name=tenmon]").val();
    var tinchi = $("input[name=tinchi]").val();

    var bomon = $("#selectbomon")
      .find(":selected")
      .val();
console.log(tenmon+tinchi+bomon);
    $.ajax({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      type: "POST",
      url: "/ajaxthemmon",
      data: {
        tenmon: tenmon,
        tinchi: tinchi,
        bomon: bomon
      },
      success: function(html) {
        toastr.success(
          `Thêm Thành Công Môn ${tenmon}, có tín chỉ ${tinchi} `,
          {
            timeOut: 1000
          }
        );
        $("[type=reset]").click();
      },
      error: function(error) {
        toastr.error(`Error rồi bạn ê : (( ,Thử gmail khác xem!!!`, {
          timeOut: 1000
        });
      }
    });
  });
//code ajax phần edit
//  idsinhvien tensinhvien khoahoc ngaysinh
$(".btn-edit-sinhvien").on("click",function(){
    var element = $(this);
    var IdSinhVien = element.attr("idsinhvien");

    var url = "/GetSinhVienTheoIdSinhVien/" + IdSinhVien;
    console.log(url);
    fetch(url)
      .then(resp => resp.json())
      .then(function(data) {
        let ngaysinh;
        data.NgaySinh == null ? (ngaysinh = "chưa có ngày sinh") : (ngaysinh = data.ngaysinh);
                             console.log(data);
                              $("input[name=idsinhvien]").val(data.IdSinhVien);
                              $("input[name=tensinhvien]").val(data.TenSv);
                              $("input[name=khoahoc]").val(data.IdKhoaHoc);
                              $("input[name=ngaysinh]").val(ngaysinh);
                           });

});
$("#FormUpdateInfoSinhVien").on("submit", function(e) {
  e.preventDefault();

  var idsinhvien=$("input[name=idsinhvien]").val();
  var tensinhvien = $("#tensvupdate").val();
  var khoahoc=$("input[name=khoahoc]").val();
  var ngaysinh=$("input[name=ngaysinh]").val();
console.log(idsinhvien+tensinhvien+khoahoc+ngaysinh);
 

  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    },
    type: "POST",
    url: "/ajaxUpdateSinhVien",
    data: {
      khoahoc: khoahoc,
      ngaysinh: ngaysinh,
      idsinhvien: idsinhvien,
      tensinhvien: tensinhvien
    },
    success: function(html) {
      toastr.success(`Update thành công `, {
        timeOut: 1000
      });
      
    },
    error: function(error) {
      toastr.error(`Update Thất bại, fix lại bug đi bạn ê!!`, {
        timeOut: 1000
      });
    }
  });
});
$(".deletesinhvien").on("click", function() {
  var idsinhvien = $(this).attr("idsinhvien");
  let flag = confirm("Are you Sure Delete ???? : (((");
  if (flag == true) {
    $.ajax({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      type: "POST",
      url: "/ajaxxoasinhvien",
      data: {
        idsinhvien: idsinhvien
      },
      success: function(html) {
        toastr.success(`Xóa thành Công thành công Sinh Viên Có id:${idsinhvien} `, {
          timeOut: 1000
        });
      },
      error: function(error) {
         toastr.error(`${error} `, { timeOut: 1000 });
      }
    });
    $(this)
      .parent()
      .parent()
      .parent()
      .remove();
  }
});
//update giang vien
$("#FormUpdateInfoGiangVien").on("submit", function(e) {
  e.preventDefault();
  var idgiangvien = $("input[name='idgiangvien']").val();
  var tengiangvien = $("input[name='tengiangvien']").val();
  var gmail = $("input[name='gmail']").val();
  var password = $("input[name=password]").val();
  var bomon = $("#bomonselect")
    .find(":selected")
    .val();
  console.log(tengiangvien + tengiangvien + password);

  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    },
    type: "POST",
    url: "/ajaxupdategiangvien",
    data: {
      idgiangvien:idgiangvien,
      tengiangvien: tengiangvien,
      gmail: gmail,
      password: password,
      bomon:bomon

    },
    success: function(html) {
      toastr.success(`Update thành công `, {
        timeOut: 1000
      });
    },
    error: function(error) {
      toastr.error(`Update Thất bại, fix lại bug đi bạn ê!!`, {
        timeOut: 1000
      });
    }
  });
});
$(".btn-add-giangvien").on("click",function () {
    var tengiangvien=$(this).attr("tengiangvien");
    var bomon = $(this).attr("bomon");
    var idgiangvien = $(this).attr("idgiangvien");
    var gmail = $(this).attr("gmail");
    $("input[name='idgiangvien']").val(idgiangvien);
    $("input[name='tengiangvien']").val(tengiangvien);
    $("input[name='gmail']").val(gmail);
    
    $("#bomonselect").val(bomon);
 

});
$(".btn-huydk").on("click",function(){
  //link 
  var flag=confirm("Xác nhận xác hủy lớp giảng viên đang dạy hnmm.. ko khuyếnh khích điều này !!! ");
  if(flag){
  var element=$(this);
    var idlopmonhoc = $(this).attr("idlopmonhoc");
    $.ajax({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      type: "POST",
      url: "/ajaxXoaGiangVienLopMonHoc",
      data: {
        idlopmonhoc: idlopmonhoc
      },
      success: function(html) {
        toastr.success(`Xóa thành công giảng viên này ra khỏi lớp  `, {
          timeOut: 1000
        });
element
  .parent()
  .html(`<button  idlopmonhoc="${idlopmonhoc}" type="button" class="btn btn-danger ">
												Chưa có người dạy
											</button>`);
      },
      error: function(error) {
        toastr.error(`Xóa thất bại `, {
          timeOut: 1000
        });
      }
    });

  }
});
$(".btn-dkLopGiangVien").on("click", function() {
  var idlopmonhoc = $(this).attr("idlopmonhoc");
  $(".daylophocnay").attr("idlopmonhoc", idlopmonhoc);
  $

});
$(".daylophocnay").on("click",function () {
  var flag = confirm("Xác nhận bổ nhiệm giảng viên này dạy ??");
  if(flag){
    var element=$(this);
   var idlopmonhoc= element.attr("idlopmonhoc");
   var idgiangvien= element.attr("idgiangvien");
   
   $.ajax({
     headers: {
       "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
     },
     type: "POST",
     url: "/ajaxBoNhiemGiangVienDayLopMonHoc",
     data: {
       idlopmonhoc: idlopmonhoc,
       idgiangvien:idgiangvien
     },
     success: function(html) {
       toastr.success(`Bổ nhiệm giảng viên vào lớp này thành công  `, {
         timeOut: 1000
       });
       $(`[idget=${idlopmonhoc}]`).parent().html(` <button idlopmonhoc='${idlopmonhoc}' type="button" class="btn btn-success btn-huydk">
											Giảng Viên có Id: ${idgiangvien} Đã dạy ...
											</button>`);
      //  element.parent()
      //    .html(`<button  idlopmonhoc="${idlopmonhoc}" type="button" class="btn btn-danger ">
			// 									Chưa có người dạy
			// 								</button>`);
     },
     error: function(error) {
       toastr.error(`Xóa thất bại `, {
         timeOut: 1000
       });
     }
   });
  }
});
$(".btn-ViewLinkBaiTap").on("click",function(){
  var element=$(this);
  var idlopmonhoc = element.attr("idlopmonhoc");
  var url = element.attr("routelink");
  var HTML="";
  console.log(url);
   fetch(url)
     .then(resp => resp.json())
     .then(function(data) {

      for (ele in data){
        HTML += HTMLRender(data[ele]);
        console.log(data[ele]);
      }
      $(".viewlistlinkbaitap").html(HTML);
     });

});
function HTMLRender(object){
  return `
  <tr>
  <td>
  ${object.Id}
  </td>
  <td>
    ${object.Id_LinkBaiTap}
  </td>
  <td>
         <a href="${object.LinkBaiTap}">${object.LinkBaiTap}</a> 
  </td></tr>`;
}
function formatDate(date) {
  var d = new Date(date),
    month = "" + (d.getMonth() + 1),
    day = "" + d.getDate(),
    year = d.getFullYear();

  if (month.length < 2) month = "0" + month;
  if (day.length < 2) day = "0" + day;

  return [year, month, day].join("-");
}
$("#formThemLinkBaiTap").on("submit", function(e) {
  e.preventDefault();

  var linkbaitap = $('input[name="linkbaitap"]').val();
  var idlopmonhoc = $(this).attr("idlopmonhoc");

  var deadline= $(".createDate").datepicker("getDate");
  deadline = formatDate(deadline);
// var array = deadline
//   .split(/\//)
//   var string = array[2] + "-" + array[1] + "-" + array[0];

console.log(deadline);
  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    },
    type: "POST",
    url: "/themlinkbaitap",
    data: {
      idlopmonhoc: idlopmonhoc,
      linkbaitap: linkbaitap,
      deadline: deadline
    },
    success: function(html) {
      toastr.success(`Thêm Thành công`, {
        timeOut: 1000
      });
      
      
    },
    error: function(error) {
      toastr.error(`Error rồi bạn ê : (( ,Debug thôi!!!`, {
        timeOut: 1000
      });
    }
  });
});
//binding idlopmonoc vào form formThemLinkBaiTap
$(".giaobaitap").on("click",function () {
  $('input[name="linkbaitap"]').val("");
  var idlopmonhoc=$(this).attr("idlopmonhoc");
    $("#formThemLinkBaiTap").attr("idlopmonhoc", idlopmonhoc);
});
  //ES6 javscript
$(".BtnDkLopMonHocChoSinhVien").on("click",function (e) {
e.preventDefault();
  var link=  $(this).attr("link");
  var flag=confirm("Xác nhận đăng ký lớp môn học này????");
  if (flag){
     toastr.success(
        `Đăng Ký Lớp Môn Học Này thành công`,
        {
          timeOut: 400
        }
      );
    window.location.href = link;
  } 
});
$(".btn-huyhocphan").on("click",function (e) {
  e.preventDefault();

    var element=$(this);
  
    var idsinhvien=element.attr("idsinhvien");
    var idlopmonhoc=element.attr('idlopmonhoc');
    var flag=  confirm("Xác nhận Hủy đăng ký lớp môn học " + idlopmonhoc);
    if(flag){

   

   $.ajax({
     headers: {
       "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
     },
     type: "POST",
     url: "/HuyLopMonHocDaDangKy",
     data: {
       idsinhvien: idsinhvien,
       idlopmonhoc: idlopmonhoc
     },
     success: function(html) {
       toastr.success(`Hủy thành công lớp môn học có id ${idlopmonhoc}`, {
         timeOut: 2000
       });
       element.parent().parent().remove();
     },
     error: function(error) {
       toastr.error(`Hủy thất bại!!!!!!!`, {
         timeOut: 1000
       });
     }
   });
  }
});
$("#thembaiviet").on("submit", function(e) {
  e.preventDefault();

  var title = $("input[name=title]").val();
  var content_article = $(".summernote").summernote("code");

   var check = $("input[name=checkPublish]:checked").val()==1?1:0;
  console.log(title + "  " + content_article + " " + check);

  
  

  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    },
    type: "POST",
    url: "/ajaxThemPost",
    data: {
      title: title,
      content_article: content_article,
      check: check
    },
    success: function(html) {
      toastr.success(`Đăng thành công bài viết `, {
        timeOut: 2000
      });
      $("[type=reset]").click();
    },
    error: function(error) {
      toastr.error(`Đăng Bài Viết Thất bại!!!!!`, {
        timeOut: 2000
      });
    }
  });
});
$(".ClearHTMl").on("click",function () {
$(".containerLinkBaiTap").html("");
});
$(".laylinkbaitap").on("click",function () {
  var url=$(this).attr("link");
 
    fetch(url)
      .then(resp => resp.json())
      .then(function(data) {
        $("loaderdisplay").css({ display: "inline-block"});
          var HTML = "";
          var ArrayData = JSON.parse(data["listlinkbaitap"]);
          var tengiangvien = data["tengiangvien"];
          var tenmonbomon = data["tenmonbomon"];
          console.log(typeof ArrayData);
        for (ele in ArrayData) {
        
          HTML += HTMLrenderTableLinkBaiTap(ArrayData[ele], tengiangvien, tenmonbomon);
        
        }
         $("loaderdisplay").css({ display: "none" });
          $(".containerLinkBaiTap").html(HTML);
      
      });
})
function HTMLrenderTableLinkBaiTap(object,TenGiangVien,TenBoMon){
   var updated_at = new Date(object.updated_at);
   var deadline = new Date(object.deadline);
   var ButtonHTML="";
   //flag =false=> vướt quá deadline
   var flag = updated_at.getTime() <= deadline.getTime();
    if(flag){
        ButtonHTML = `<td><button  onClick="clicknopbai('${object.Id_LinkBaiTap}')" idlopmonhoc="${object.Id_LinkBaiTap}" class="btn m-btn--pill    btn-primary btn-sm">
											 Nộp Bài
                    </button></td> 
                    <script>
                    function clicknopbai (idlopmonhoc) {
                      console.log(idlopmonhoc);
                      $("#formnhapbaitap").attr("idlopmonhoc",idlopmonhoc);
                    $(".btn-nopbai").click();
                    }</script>`;
    }
    else{
      ButtonHTML = `<td><button  disabled="disabled" class="btn m-btn--pill    btn-primary btn-sm">
											 Hết hạn
										</button></td>`;
    }
  return `<tr>
  <td>${object.Id_LinkBaiTap}</td>
  <td>${TenBoMon}</td>
  <td>${TenGiangVien}</td>
  <td><a href="${object.LinkBaiTap}">Link Bài Tập(CLick)</a></td>
  ${ButtonHTML}
  
  
  </tr>`;
}
;
$("#formnhapbaitap").on("submit", function(e) {
  e.preventDefault();

  var linkbainop = $("#linkbainop").val();
  var idlopmonhoc=$(this).attr("idlopmonhoc");
  var idsinhvien=$(this).attr("idsinhvien");

 

  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    },
    type: "POST",
    url: "/AJAXNopBaiTap                          ",
    data: {
      linkbainop: linkbainop,
      idlopmonhoc: idlopmonhoc,
      idsinhvien: idsinhvien
    },
    success: function(html) {
      toastr.success(`Nộp bài thành công `, {
        timeOut: 2000
      });
      $("#linkbainop").val("");
    },
    error: function(error) {
      toastr.error(`Nộp Thất bại.Hãy kiểm tra lại .......`, {
        timeOut: 2000
      });
    }
  });
});
$(".btn-ngunghoc").on("click",function () {
  var element=$(this);
  var link=element.attr("link");
  var flag=confirm("Xác nhận cho Hết hạn đăng ký học");
  if(flag){
    $.ajax({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      type: "POST",
      url: "/hethandangkyhoc",
      data: {
       
      },
      success: function(html) {
        
        toastr.success(
          `Xác nhận hết hạn đăng ký lớp môn học`,
          {
            timeOut: 2000
          }
        );
        window.location.href = "listlopmonhoc";
       
       
      },
      error: function(error) {
        toastr.error(`Hủy thất bại,,Hãy Xác nhận lại`, {
          timeOut: 2000
        });
      }
    });
  }
  
});
$(".btn-OnDangKyHoc").bind("click",function () {
     var flag = confirm("Xác Nhận Mở Đăng ký Lớp học Cho Sinh Viên?? ");
     if (flag) {
       $.ajax({
         headers: {
           "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
         },
         type: "POST",
         url: "/MoDangKyHocChoSinhVien",
         data: {},
         success: function(html) {
           toastr.success("Mở Đăng ký Thành công ", {
             timeOut: 2000
           });
            window.location.href = "listlopmonhoc";
         },
         error: function(error) {
           toastr.error("Mở Đăng ký thất bại!!!", {
             timeOut: 2000
           });
         }
       });
     }
});
function OnDangKyHoc() {
  console.log("click!!!");
}
//setup defauft
 $(".summernote").summernote({ airMode: true, placeholder: "Write Here........................." });
 $(".summernote").summernote("formatH1");
 $(".summernote").summernote("formatH2");

  
        
});

        
        