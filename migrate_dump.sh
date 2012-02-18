cp pages.sql pages_ww.sql
perl -pi -w -e 's/dcphotobooth.elimenohp.com/test.dcphotobooths.com:8085/g;' pages_ww.sql
perl -pi -w -e 's/local.dcphotobooths.com:8082/test.dcphotobooths.com:8085/g;' pages_ww.sql
perl -pi -w -e 's/local.elimenohp.com:8082/test.dcphotobooths.com:8085/g;' pages_ww.sql
mysql -u root -prootpass dcphotobooth_db < pages_ww.sql
