/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*  Gritter
 *  type = 1 : success, 0 : Error
 *  t = Title
 *  msg = Error Message
 */
function gritterMsg(type, t, msg)
{
    if(type == 2)
    {
        new PNotify({
            title: t,
            text: msg,
            type: 'alert',
            delay: 2000,
        });
    }
    else if(type == 1)
    {
        new PNotify({
            title: t,
            text: msg,
            type: 'success',
            delay: 2000,
        });
    }
    else if(type == 0)
    {
        new PNotify({
            title: t,
            text: msg,
            type: 'danger',
            delay: 2000,
        });
    }
}