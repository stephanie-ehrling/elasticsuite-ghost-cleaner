Elasticsuite ghost cleaner
===========

A magento 2 module that uses a cron job to delete indices marked as "ghost".

Requirements
-------
- PHP >= 7.1
- Magento >= 2.2
- [Smile Elasticsuite module](https://github.com/Smile-SA/elasticsuite) >= 2.10

Installation
-------
### Via composer (recommended)
Go to the Magento 2 root directory and run the following commands in the shell:
```
composer require sehrling/elasticsuite-ghost-cleaner
bin/magento module:enable Sehrling_ElasticsuiteGhostCleaner
bin/magento setup:upgrade
```

### Manually
Create the directory `app/code/Sehrling/ElasticsuiteGhostCleaner` and copy the all the files from this repository into it. Then run:
```
bin/magento module:enable Sehrling_ElasticsuiteGhostCleaner
bin/magento setup:upgrade
```

License
-------
[MIT](https://opensource.org/licenses/mit-license.phpp)
