Magento Test
============

This repository forms the basis of a test Magento project to be used to complete several sample scenarios.


Set up
------

Before you start, you need Apache 2, PHP (and the usual library dependencies) and MySQL 5 running locally.

To get up and running, follow these steps:

- Clone this repository locally on your system.

- Set magentotest.localhost to resolve to your localhost (127.0.0.1) in your /etc/hosts file or equivalent.

- Create an Apache virtualhost named magentotest.localhost with a DocumentRoot matching the root of your local repository clone.

- Create a new MySQL database named "magentotest", granting full priveleges on it to "mangetotest"@localhost with password "magentotest".

- On your command line, run php shell/install.php install from the root of your local repository clone.

- Verify the set up worked, by visiting http://magentotest.localhost/ in your browser.

- You can also log in to the Magento administration area at http://magentotest.localhost/admin/ using username "admin" and password "p@$$w0rd".


Working on the project
----------------------

Work locally, following standard Zend coding standards. You'll need to be set up as a collaborator to be able to push to the master respoistory on Github.


Continuous Intergration
-----------------------

When commits are pushed to the master repository on Github, a build is deployed to the development server at http://magentotest.zhibek.com/.

When the build is deployed, any migrations included will be run and the cache will be cleared.

Currently no unit tests or acceptance tests are running against the builds. Before a task is complete, it should be verified on the development server.