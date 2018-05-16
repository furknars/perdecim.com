$(function()
{

  $(".label1").hide();
  $("#kkno").hide();
  $("#kkcvv").hide();
  $("#yil").hide();
  $("#ay").hide();
  $(".baslik2").hide();
  $("#kkadsoyad").hide();
  $("#butKaydet").hide();
  $(".table1").width("400");




$("#ad,#soyad,#kkadsoyad").keyup(function (){//Kelime Girmeyi Saglıyor



  if (this.value.match(/[^a-zA-Z]/g))
  {

    this.value = this.value.replace(/[^a-zA-Z]/g,'');

  }

});
  

  $("#butKontrol").click(function()
  {

    if ($("#ad").val()=="" || $("#soyad").val()==""  || $("#tc").val()=="" || $("#email").val()==""  ||  $("#sifre1").val()==""||  $("#sifre2").val()=="" ) 
    {
      alert("Boş Alanları Doldurunuz");
    }
    else if ($("#sifre1").val()!= $("#sifre2").val())
    {
      alert("Şifreler Farklı.Yeniden Giriniz.");
      $("#sifre1").val("");
      $("#sifre2").val("");
    }
    else 

      {   
        var mailBireysel = $('#email').val();
        var mailDonen = checkEmail(mailBireysel);

      if(mailDonen)
      {  
             $(".label1").show();
             $("#kkno").show();
             $("#kkcvv").show();
             $("#yil").show();
             $("#ay").show();
             $(".baslik2").show();
             $("#kkadsoyad").show();
             $("#butKaydet").show();
             $(".table1").width("800");
             $("#butKontrol").hide();
             
             $("#soyad").prop("disabled", true);
             $("#tc").prop("disabled", true);
             $("#email").prop("disabled", true);//texti kullanım dısı yapma
             $("#kAdi").prop("disabled", true);
             $("#sifre1").prop("disabled", true); 
             $("#sifre2").prop("disabled", true);
             $("#ad").prop("disabled", true);
      }
    else
      {
        alert("Mail formatı uygun değil");
      }
    }




  });

  $("#butKaydet").click(function()
  {
    $("#soyad").prop("disabled", false);
    $("#tc").prop("disabled", false);
    $("#email").prop("disabled", false);//texti kullanım dısı yapma
    $("#kAdi").prop("disabled", false);
    $("#sifre1").prop("disabled", false); 
    $("#sifre2").prop("disabled", false);   
    $("#ad").prop("disabled", false);

  });

function checkEmail(email) {

var filter = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;

 

if (!filter.test(email)) 
{
  return false;
}
else
{
  return true;
}
}


});