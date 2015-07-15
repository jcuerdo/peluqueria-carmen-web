<? /*

================================================================================

Sendmail Attachment Files  v1.2 (15 July of 2004)

Copyright © 2004  Neftali Yagua | http://www.neftaliyagua.com.ve

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Lesser General Public
License as published by the Free Software Foundation; either
version 2.1 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public
License along with this library; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

License granted only if full copyright notice retained.

for questions and commentaries it contacts through my email:

Neftali Yagua
neftali.yagua@gmail.com
http://www.neftaliyagua.com.ve/

===================================================================================

Sendmail Attachment Files  v1.2 (15 de Julio de 2004)

Copyright © 2004  Neftali Yagua | http://www.neftaliyagua.com.ve

Esta Libreria es software libre;  usted puede redistribuirla y/o
modificarla bajo términos del GNU poca licencia el público en general
según lo publicado por la fundación libre del software;
versión 2,1 de la licencia, o (en su opción) cualquier versión más última.

Esta Libreria se distribuye con la esperanza de que sea útil,
pero SIN NINGUNA GARANTÍA;  sin uniforme la garantía implicada
del MERCHANTABILITY o de la APTITUD PARA Un PROPÓSITO PARTICULAR.
Vea el GNU poca licencia el público en general para más detalles.
Usted debe haber recibido una copia del GNU poca licencia
el público en general junto con esta biblioteca;

si no, escriba a la Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

licencia del mA 02111-1307 los E.E.U.U. concedido
solamente si el aviso de copyright se conserva.

para preguntas y comentarios contacteme via e-mail:

Neftali Yagua
neftali.yagua@gmail.com
http://www.neftaliyagua.com.ve/


***********************************************************************************/
class sendmail
{
/**** Please it forms the following data	 ****/

	var $serveradmin="root";	//	here you put the email of the server administrator. for example: var $serveradmin="admin@domain.com";
	var $typedefault= "html";			//	type of email by defect, to my I like HTML ;)

/****		 	End of the configuration			 ****/
	function sendmail($_0,$_1,$_2,$_3,$_4='',$_5='',$_6='',$_7='',$_8='')
	{
		if(!$_7)$_7=$this->typedefault;
		if(!$_8)$_8=Array();
		while(list($_9,$_A)=each($_8))
		{
			if($_8[$_9]['size']!=0)
			{
				if(!$_8[$_9]['data'])$_8[$_9]['data']=fread(fopen($_8[$_9]['tmp_name'], "r"),$_8[$_9]['size']);
				$_B.="X-attachments: ".$_8[$_9]['name']."\n";
				$_C.="\n--Neftali-Yaguas\n";
				$_C.="Content-type: ".$_8[$_9]['type']."; name=\"".$_8[$_9]['name']."\"\n";
				$_C.="Content-Transfer-Encoding: BASE64\n";
				$_C.="Content-disposition: attachment; filename=\"".$_8[$_9]['name']."\"\n\n";
				$_C.=chunk_split(base64_encode($_8[$_9]['data']))."\n";
			}
		}
		$_D ="From: ".$_2."\n";
		if($_4)$_D.="CC: ".$_4."\n";
		if($_5)$_D.="BCC: ".$_5."\n";
		if($_6)$_D.="Reply-To: ".$_6."\n";
		$_D.="X-Priority: 1\n";
		$_D.="X-MSMail-Priority: High\n";
		$_D.="X-Mailer: Neftali Yaguas (jhony192) -\"Sendmail Attach files 1.2\"- jhony192@coderic.net\n";
		$_D.="Return-Path: ".$this->serveradmin."\n";
		$_D.="MIME-version: 1.0\n";
		$_D.="Content-type: multipart/mixed; ";
		$_D.="boundary=\"Neftali-Yaguas\"\n";
		$_D.="Content-transfer-encoding: 7BIT\n".$_B;
		
		$_E ="--Neftali-Yaguas\n";
		$_E.="Content-type: text/".$_7."; charset=US-ASCII\n";
		$_E.="Content-transfer-encoding: 7BIT\n";
		$_E.="Content-description:Cuerpo de Mensaje\n\n";
		
		$_F =$_E.$_1;
		
		$_F.="\n\n".$_C;
		
		$_F.="--Neftali-Yaguas--\n";
		
		return mail($_3,$_0,$_F,$_D);
	}
}
?>