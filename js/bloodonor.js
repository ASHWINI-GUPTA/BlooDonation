/**
 * Created by Ashwini Gupta on 16-01-2016.
 */

function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value == "India"){
        var optionArray = ["-----Select-----","Delhi","Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chandigarh","Chhattisgarh","Dadra/Nagar Haveli","Daman/Diu","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu/Kashmir","Jharkhand","Karnataka","Kerala","Lakshadweep","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Pondicherry","Punjab","Rajasthan","Sikkim","Tamil Nadu","Tripura","Uttaranchal","Uttar Pradesh","West Bengal"];
    } else if(s1.value == "Delhi"){
        var optionArray = ["-----Select-----","Central Delhi","North Delhi","South Delhi","East Delhi","North East Delhi","South West Delhi","New Delhi","North West Delhi","West Delhi"];
    } else if(s1.value == "Madhya Pradesh"){
        var optionArray = ["-----Select-----","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Guna","Gwalior","Hoshangabad","Indore","Itarsi","Jabalpur","Khandwa","Khargone","Mandsaur","Morena","Murwara (Katni)","Nagda","Neemuch","Pithampur","Ratlam","Rewa","Sagar","Satna","Sehore","Seoni","Shivpuri","	Singrauli","Ujjain","Vidisha"];
    }else if(s1.value == "Andaman and Nicobar Islands"){
        var optionArray = ["-----Select-----","Bombuflat","Garacharma","Port Blair","Rangat"];
    }
    else var optionArray = ["-----All-----"];
    for(var option in optionArray){
        var pair = optionArray[option].split(",");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[0];
        s2.options.add(newOption);
    }
}
