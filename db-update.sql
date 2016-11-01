UPDATE act_options SET option_value = replace(option_value, 'http://ingage.modoaberto.com.br/actar', 'http://blog.actar.com.br:8080/') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE act_posts SET guid = replace(guid, 'http://ingage.modoaberto.com.br/actar','http://blog.actar.com.br:8080/');
UPDATE act_posts SET post_content = replace(post_content, 'http://ingage.modoaberto.com.br/actar', 'http://blog.actar.com.br:8080/');
