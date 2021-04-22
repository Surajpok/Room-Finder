function validate(){

    if( document.myForm.roomTitle.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.roomTitle.focus() ;
        return false;
     }

     if( document.myForm.roomDisc.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.roomDisc.focus() ;
        return false;
     }
     if( document.myForm.location.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.location.focus() ;
        return false;
     }
     if( document.myForm.landmark.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.landmark.focus() ;
        return false;
     }
     if( document.myForm.province.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.province.focus() ;
        return false;
     }
     if( document.myForm.contact.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.noofroom.focus() ;
        return false;
     }
     if( document.myForm.noofroom.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.noofroom.focus() ;
        return false;
     }
     if( document.myForm.img.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.img.focus() ;
        return false;
     }
     


}
