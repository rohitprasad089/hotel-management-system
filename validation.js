function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
   }
function validateavailability()
{
	var check_in=document.availability.check_in.value;
	var check_out=document.availability.check_out.value;
	var room_name=document.availability.room_name.value;
	var room_type=document.availability.room_type.value;
	var outerror=nameerror=typeerror=true;
if (check_out<=check_in)
	{
	 printError("outerror", "Please Enter a valid date");
    } 
	else {
        printError("outerror", "");
        outerror = false;
    }
if (room_name=="Room Name")
	{
	 printError("nameerror", "Please select room name");
    } 
	else {
        printError("nameerror", "");
        nameerror = false;
    }
if (room_type=="Room Type")
	{
	 printError("typeerror", "Please select room type");
    } 
	else {
        printError("typeerror", "");
        typeerror = false;
    }
if((outerror || nameerror || typeerror)==true){
		return false;
}
}
//validating booking
function validatebooking(){
	var check_in=document.booking.check_in.value;
	var check_out=document.booking.check_out.value;
	var room_name=document.booking.room_name.value;
	var room_type=document.booking.room_type.value;
	var adult=document.booking.adults.value;
	var children=document.booking.children.value;
	var phone=document.booking.phone.value;
	
	var outerror=nameerror=typeerror=adulterror=childrenerror=phoneerror=true;

if (check_out<=check_in)
	{
	 printError("outerror", "Please Enter a valid date");
    } 
	else {
        printError("outerror", "");
        outerror = false;
    }
if (room_name=="Room Name")
	{
	 printError("nameerror", "Please select room name");
    } 
	else {
        printError("nameerror", "");
        nameerror = false;
    }
if (room_type=="Room Type")
	{
	 printError("typeerror", "Please select room type");
    } 
	else {
        printError("typeerror", "");
        typeerror = false;
    }
if (adult=="Adults")
	{
	 printError("adulterror", "Please select Adults");
    } 
	else {
        printError("adulterror", "");
        adulterror = false;
    }
if (children=="Children")
	{
	 printError("childrenerror", "Please select children");
    } 
	else {
        printError("childrenerror", "");
        childrenerror = false;
    }
var regex = /^[1-9]\d{9}$/;
if(regex.test(phone) === false) {
            printError("phoneerror", "Please enter a valid 10 digit mobile number");
        }
	else{
            printError("phoneerror", "");
            phoneerror = false;
        }
if((outerror || nameerror || typeerror || adulterror || childrenerror || phoneerror )==true)
{
		return false;
}
else {
		alert("succesfull");
    }
}