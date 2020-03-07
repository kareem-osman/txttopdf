let cont= document.getElementsByClassName('clear')[0]
cont.onclick=function(){
    document.getElementById('view').value=''
}

let copy= document.getElementById('copy')
copy.onclick=function(){
    document.getElementById('view').select()
    document.execCommand('copy')

// alert ('هذا التطبيق \n يساعد علي فصل جزء اللغه العربيه والانجليزيه من المقالات المشتركه')
}