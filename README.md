Elasticsuite ghost cleaner
===========

A magento 2 module that  sales rules to add free products to cart. This is the Magento 2 version of the same extension that can be found [here](https://github.com/code4business/freeproduct).
The development and the function of the original Magento1 extension is described in the following two websites:
- <http://www.code4business.de/make-a-gift-magento-warenkorbpreisregeln-um-geschenke-erweitern/>
- <http://www.webguys.de/magento/turchen-21-kostenlose-produkte-uber-warenkorb-preisregeln/>

Requirements
-------
- PHP >= 7.1
- Magento >= 2.2
- [Smile Elasticsuite module](https://github.com/Smile-SA/elasticsuite) >= 2.10

Supported Product Types
-------
The extension only supports simple and virtual product types, other types or custom options are not supported. The reason is that other product types need additional information that can only be added with IDs. This leads to a way more complicated module; we want to keep this module clean and easy.

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
