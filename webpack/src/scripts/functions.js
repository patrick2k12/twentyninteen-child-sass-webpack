function cookies()
   {var cookieInfo = $('#cookies-info'), cookieClose = $('#cookies-info').find('.cookies-info__accept');
    checkCookie();
   
    function setCookie(cname, cvalue, exdays)
       {var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = 'expires=' + d.toUTCString();
        document.cookie = cname + '=' + cvalue + expires +'; path=/';
       }
   
    function getCookie(cname)
       {var name = cname + '=';
        var ca = document.cookie.split(';');
        for (var i = 0;i < ca.length;i++)
           {var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
           }
        return '';
       }
   
    function checkCookie()
       {var isExist = getCookie(document.domain + '-cookies-info');
        if (isExist != '')
           {cookieInfo.hide();
           }
        else 
           {cookieInfo.show();
            cookieClose.on('click', function(e)
               {e.preventDefault();
                cookieInfo.hide();
                isExist = true;
                if (isExist != '' && isExist != null)
                   {setCookie(document.domain + '-cookies-info', isExist, 365);
                   }
               });
           }
       }
   }





export default {
  cookies
};
