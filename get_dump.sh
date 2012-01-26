mysqldump --user=root --password=rootpass dcphotobooth_db wp_posts > pages.sql
perl -pi -w -e 's/local.dcphotobooths.com:8082/dcphotobooth.elimenohp.com/g;' pages.sql
perl -pi -w -e 's/local.elimenohp.com:8082/dcphotobooth.elimenohp.com/g;' pages.sql
