var today = "2020-03-25";
var baby = Object.keys(Data["Chennai"]);
console.log(baby);
today = baby[(baby.length)-1];
console.log(today);
function fun1(){
    Swal.fire({
        title: 'CoronaSpeak',
        input: 'checkbox',
        showCloseButton: true,
        text: ' CoronaSpeak Disclaimer The CoronaSpeak  is a platform which aims to share information about public health events and emergencies.The data on the dashboard is refreshed every fifteen (15) minutes and data is accurate as at time of refreshing. We source info from WHO and many other sources.CoronaSpeak is just an initiatve to support the citizens who want to submit cases, info to authorities like WHO, governments anonymously.The CoronaSpeak  is not a comprehensive representation of all the events and emergencies that CoronaSpeak is aware of and responding to. The content of the CoronaSpeak  is for general information only. It is subject to change without notice. While every reasonable effort has been made to make the information on the CoronaSpeak  as timely and accurate as possible, CoronaSpeak makes no claims, promises or guarantees about the effectiveness, completeness and accuracy of the contents of the CoronaSpeak , and expressly disclaims any liability for damages as a result of the use and/or application of the CoronaSpeak , errors and/or omissions in the content.The responsibility for the interpretation and use of the content lies with the reader. CoronaSpeak reserves the right to make updates and changes to posted content without notice and accepts no liability for any errors or omissions in this regard.CoronaSpeak assumes no responsibility or liability for any consequence resulting directly or indirectly from any action or inaction readers take based on or made in reliance on the information and material available on the CoronaSpeak .While every reasonable effort has been made to use appropriate language and pictures on the CoronaSpeak , CoronaSpeak expressly disclaims any responsibility for inadvertent offensive or insensitive, perceived or actual, language or pictures. CoronaSpeak will take no responsibility for or be liable for the CoronaSpeak  being temporarily unavailable in the event of technical or other issues.The size of the pie charts corresponds to the number of events in a given country or territory; the size does not indicate the severity or risk associated with the event(s). The designations employed and the presentation of content on the CoronaSpeak , including names of the events, maps and other illustrative materials, do not imply the expression of any opinion whatsoever on the part of CoronaSpeak concerning the legal status of any country, territory, city or area, or of its authorities, or concerning the delineation of frontiers and borders. Grey areas on maps represent approximate border lines for which there may not yet be full agreement  ',
        width : 1380,
        height: 1500,
        imageAlt: 'Custom image',
        confirmButtonColor:"Accept",
        confirmButtonText:"Accept"
        },function (isConfirm){
            alert("Accept");
        });
        $('.swal2-confirm').click(function(result){
        window.location.href = 'https://www.coronaspeak.com/corona/case/speak.php';
    });
}
function fun2(){
    window.location.href = "https://www.coronaspeak.com/corona/contributors.php";
}
