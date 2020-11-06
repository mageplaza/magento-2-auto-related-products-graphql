# Magento 2 Auto Related Products GraphQL/PWA

[Mageplaza Auto Related Products for Magento 2](https://www.mageplaza.com/magento-2-automatic-related-products/) is an effective solution for displaying and introducing to customers products related to what they are viewing in the store. 

This extension is especially helpful for cross-selling and up-selling. It runs based on a set of rules functioning as conditions and actions and can be configured easily from the admin backend. Through this set of rules, the store admin can show different types of products as recommendations for customers. Accordingly, the products that match the rules will be displayed in a certain block. The auto-related product block is customizable as the store admin can set the priorities to determine which products will be displayed first among unlimited products recommended. 

Also, Magento 2 Auto Related Products supports unlimited product blocks that provide you a wide variety of ways to showcase your products to customers. Some common auto-related product blocks include Related products, Upsell products, Cross-sell products, New products, Featured products, Bestsellers, or Daily deals. 

You can use all these kinds of product blocks, but there will always be something that generates better results. If you do not keep track of each method and compare the results, it’ll be difficult to know the best one you can focus on instead of wasting time and efforts on those that are out of your customers’ concerns. Therefore, Magento 2 Auto Related Products provides you with an insightful report which lets you know the most critical related block statistics, including impression, clicks, and CTR (click through rate), and supports A/B testing. 

If you ever worry about the page loading speed that significantly impacts your store’s performance and the customer experience, Magento 2 Auto Related Products will solve this problem right away. It uses the Ajax loading technique that loads the related products only instead of loading the whole page. This will quicken your website’s loading speed incredibly. 

Especially, **Magento 2 Auto Related Products GraphQL is a part of Blog extension that adds GraphQL features, this support for PWA Studio.**

## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-automatic-related-products-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

**Magento 2 Auto Related Products GraphQL/PWA** allows admins to get the rule’s information through GraphQL.

To start working with Automatic Related Product GraphQL in Magento, you need to:

- Use Magento 2.3.x or higher, Return your site to developer mode
- Refer to our supported GraphQL requests [here](https://documenter.getpostman.com/view/10589000/SzfCVSAP?version=latest)

![arp](https://i.imgur.com/5hIdIBg.png)

**Note:** Magenti 2 Auto Related Products requires installing [Mageplaza Auto Related Products](https://www.mageplaza.com/magento-2-automatic-related-products/) in your Magento installation. 

## 2. How to use

To perform GraphQL queries in Magento, please do the following requirements: 
- Use Magento 2.3.x or higher. Set your site to [developer mode](https://www.mageplaza.com/devdocs/enable-disable-developer-mode-magento-2.html). 
- Set GraphQl endpoints as `http://<magento2-server>/graphql` in url box, click **Set endpoint**. 
(e.g. `http://dev.site.com/graphql`)
- To view the queries that the **Mageplaza Auto Related Products GraphQL** extension supports, you can look in `Docs > Query` in the right corner. 

## 3. Devdocs

- [Magento 2 Auto Related Products API & examples](https://documenter.getpostman.com/view/10589000/SzfCVSAN?version=latest)
- [Magento 2 Auto Related Products GRaphQL & examples](https://documenter.getpostman.com/view/10589000/SzS1T8pe?version=latest)

Click on Run in Postman to add these collections to your workspace quickly. 

![Magento 2 Auto Related Products graphql pwa](https://i.imgur.com/lhsXlUR.gif)

## 4. Contribute to this moduel

Fee free to **Fork** and contribute to this module. You can also create a pull request, so we will merge your changes in main branch. 

## 5. Get Support

- Feel free to [contact us](https://www.mageplaza.com/contact.html) if you have any questions. 
- If you find this project helpful, please give us a **Star** ![star](https://i.imgur.com/S8e0ctO.png)
