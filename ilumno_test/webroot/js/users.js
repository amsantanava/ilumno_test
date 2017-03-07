/**
 * Created by iDigital on 06/03/2017.
 */
$(document).ready(function () {
    $(document).on('keydown', '.numeric', function(event){
        if(isNaN(event.key)){
            return false;
        }
    });
});