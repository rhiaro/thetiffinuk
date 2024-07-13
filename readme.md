```
sudo docker run -d -v /home/rhiaro/Documents/rhiaro/tiffin/thetiffinuk:/app --name tiffin -p 80:80 -e php.short_open_tag=On -e php.display_errors=On webdevops/php-apache:7.4

```