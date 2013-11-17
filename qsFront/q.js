function check_form(name)
{
    var results = new Array();
    var forms = document.getElementsByName(name);
    var elements = forms[0];

    for(var i=0;i<elements.length;i++)
    {
        var ele = elements[i];
        var str = '';
        if(ele.type == 'radio')
        {
            str = checke_radio(ele);
            if(str == '')
            {
                alert('你还有没答完的题喔');
                ele.focus();
                return false;
            }
            if(!results[ele.name])
            {
                results[ele.name] = str;
                //print_arr(results);
            }
            continue;
        }
        else if(ele.type == 'checkbox')
        {
            if(ele.name == 'webUsage')
            {
                str = check_box_three(ele);
                if(str == '')
                {
                    ele.focus();
                    return false;
                }
                results[ele.name] = str;
                continue;
            } 
            else
            {
                str = check_box(ele);
                if(str == false)
                {
                    alert('你还有没答完的题喔');
                    ele.focus();
                    return false;
                }
                results[ele.name] = str;
                continue;
            }
        }
    }
    pushData(results)
    return true;
}

function checkContact(name)
{
    var forms = document.getElementsByName(name);
    var elements = forms[0];

    var results= new Array();
    for(var i=0;i<elements.length;i++)
    {
        var ele = elements[i];
        if(ele.type == 'text')
        {
            if(ele.value == '')
            {
                alert("最后一步，请认真填写您的联系方式，我们会通过您留下的联系方式寄送礼品");
                ele.focus();
                return false;
            }
            results[ele.name] = ele.value;
        }
    }
    pushData(results);
    return true;  
}

function print_arr(arr)
{
    var str = '';
    for(var i in arr)
        str+=i + ':' + arr[i] + ';';
    alert(str);
}

function checke_radio(ele)
{
    var ele = document.getElementsByName(ele.name);
    var str = '';
    for(var j=0;j<ele.length;j++)
        if(ele[j].checked)
        {
            str = ele[j].value;
            break;
        }
    return str; 
}

function check_box(ele)
{
    var ele = document.getElementsByName(ele.name);
    var str = '';
    for(var j=0;j<ele.length;j++)
    {
        if(ele[j].checked)
        {
            if(str != '')
                str += ',';
            str += ele[j].value;
        }
    }
    return str;
}
//检查一定要选择3个的选项,15题
function check_box_three(ele)
{
    ele = document.getElementsByName(ele.name);
    var count=0;
    var str='';
    for(var i=0;i<ele.length;i++)
    {
        if(ele[i].checked)
        {
            count++;
            if(str != '')
                str += ',';
            str += ele[i].value;
        }
        if(count>3)
            break;
    }
    if(count>3)
    {
        alert("第10题只能选择3个喔，亲!");
        return '';
    }
    if(count <3)
    {
        alert("别那么小气么，第10题需要选择3个喔!");
        return '';
    }
    return str;
}

function createDict(results)
{
    dic = '{';
    var temp='';
    var j=0;
    var mark = '"';
    for(var i in results)
    {
        temp= mark + i + mark + ':' + mark + results[i] + mark;
        if( j == 0)
            dic += temp;
        else
            dic += "," + temp;
        j++;
    }

    // get IMEI
    var imei = getIMEI();
    dic += "," + mark + "imei" + mark + ':' + mark + imei + mark;
    dic += '}';
    return dic;
}

function getIMEI()
{
    var url = window.location.href;
    var imei = '';
    if(url.indexOf("?") != -1)
    {
        var parameter = url.split("?");
        var pairs = parameter[1].split("&");
        for (var p in pairs)
        {
            var pair = pairs[p].split("=");
            if(pair[0].toLowerCase() == "imei")
            {
                var end = pair[1].indexOf("#contact");
                if(end >= 0)
                {
                    imei = pair[1].substring(0, end);
                }
                else
                    imei = pair[1];
                break;
            }
        }
    }
    return imei;
}

// http post
var xhr;
function pushData(results)
{
    var dic = createDict(results);
    var url = 'http://10.109.242.65:8000/qs/sendqs/';
    xhr = new XMLHttpRequest();
/*
    xhr.onreadystatechange = callBack()
    {
        if(xhr.readyState == 4 && xhr.status == 200)
            return true;
        else
            return false;
    };
*/
    xhr.open("POST",url,false);
//    xhr.timeout=10000;
//    xhr.ontimeout = function(){alert("time out!");}
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("dic=" + dic);
    if(xhr.status == 200)
        return true;
    return false;
}


/*
function callBack()
{
    alert(xhr.status);
    if(xhr.readyState == 4 && xhr.status == 200)
    {
        alert('您的网络不给力，请重新提交!');
    }
    //var b = xhr.respnseText;
}

*/
