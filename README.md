# Yuki API Client
Documentation of the webservice: https://documenter.getpostman.com/view/12207912/UVCBB51L#intro

## Subclients
Yuki has different webservices. They are made available as "subclients"

Run all the generate commands by running `./run_soap_client.sh`


Subclients generated with wizard. Example:

`vendor/bin/soap-client wizard`

Where would you like to store your config file? [config/soap-client.php]:
> src/SubClient/Sales/YukiApiSalesClientConfig.php


Wsdl location (URL or path to file):
> https://api.yukiworks.be/ws/Sales.asmx

Should methods be generated with docblocks? (yes/no) [yes]:
> yes

Generic name used to name this client (Results in <name>Client <name>Classmap etc.):
> YukiApiSales

Directory where the client should be generated in:
> src/SubClient/Sales

Namespace for your client:
> MaartenDeBlock\YukiApiClient\SubClient\Sales 


Archive has an error, see https://github.com/phpro/soap-client/issues/532 . For now, a copy is made in schemas dir as
a workaround.
