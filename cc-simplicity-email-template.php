<?php
/*
Email Template: CC-Simplicity
*/
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
a:link, a, a:visited{color:#008EAA !important;}
a:hover { text-decoration: none !important; color:#008EAA;}
h2, h3, h4, h5, h6{padding: 0px 0px 10px 0px;margin:0px;}
h1 a, h1 a:link, h1 a:visited{color: #008EAA !important;text-decoration:none;}
p{padding-top:10px;}
</style>
</head>
<body style="margin: 0; padding: 0; background: #e5e5e5;font-family:Helvetica, Arial, Sans-serif;line-height:22px;color:#222222;font-size:12px;" marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:30px;margin-bottom:10px;padding:10px 15px;background:#ffffff;border:1px solid #CCCCCC">
                <tr>
                    <td valign="middle">
	                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #cccccc;margin-bottom:10px;">
                            <tr>
                                <td style="padding-top:0px;">
                                	<h1 style="font-size:34px;margin:14px 0 8px 0;padding-bottom:10px;color:#333333;"><a href="<?php echo esc_attr( get_site_url() ); ?>" style="text-decoration:none;" target="_blank"><?php bloginfo( 'name' ); ?></a></h1>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:0px;">
                                	<h4 style="margin:0px;padding-bottom:10px;color:#666666;"><?php bloginfo( 'description' ); ?></h4>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
				<tr style="padding-bottom:12px;">
                   <td style="font-size:12px;line-height:22px;color:#111111;">
					DPW_CONTENT
                    </td>
				</tr>
                <tr>
                    <td style="color:#bbbbbb; border-top:1px solid #cccccc; padding:12px 0 10px;">
                    <?php printf( __( 'Email sent on %s', 'dpw' ), date_i18n( get_option( 'date_format' ) ) ); ?>
                    <img src="<?php echo get_stylesheet_directory_uri() . '/img/cc_logomark-30x30.png' ?>" alt="Supporting collaboration through data, maps and stories." width="30" height="30" align="right" />
                    </td>
                </tr>
            </table>
        	</td>
    	</tr>
        <?php /* ?>
    	<tr>
    		<td>
                
    			<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px;margin-bottom:10px;padding:10px 15px;background:#f3f3f3;border:10px solid #eeeeee">
    		   	<tr>
    				<td style="text-align:center;color:#111111;font-weight:normal;font-size:12px;">
    					<?php printf( __( 'For any support, please contact <a href="mailto:%1$s">%1$s</a>', 'dpw' ), esc_attr( get_option( 'admin_email' ) ) ); ?>
    				</td>
    			 </tr>
    			</table>

    		</td>
    	</tr>
        <?php */ ?>

	</table>
</body>
</html>