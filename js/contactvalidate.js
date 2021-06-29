function validate(){
    if( document.myForm.fromEmail.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.fromEmail.focus() ;
        return false;
     }
     if( document.myForm.toEmail.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.toEmail.focus() ;
        return false;
     }
     if( document.myForm.subject.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.subject.focus() ;
        return false;
     }
     if( document.myForm.message.value == "" ) {
        alert( "Please provide your address" );
        document.myForm.message.focus() ;
        return false;
     }
}