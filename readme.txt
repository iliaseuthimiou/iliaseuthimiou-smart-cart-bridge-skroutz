=== Smart Cart Bridge for Skroutz ===
Tags: woocommerce, skroutz, marketplace, webhook, orders
Requires at least: 6.3
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Import Skroutz Marketplace Smart Cart webhook orders into WooCommerce and synchronize order and shipment updates.

== Description ==

Smart Cart Bridge for Skroutz is an unofficial integration that receives Skroutz Marketplace new-order and order-update webhooks.

Features:

* Secure, randomly generated webhook URL.
* Idempotent order creation during webhook retries.
* Product and variation matching by ID, SKU, or custom meta.
* WooCommerce order creation with line items and marketplace shipping cost.
* Invoice-aware billing addresses and customer shipping addresses.
* Safe order-state synchronization.
* Courier, tracking, pickup, invoice, payment, fee, and fulfillment metadata.
* Legacy order storage and HPOS support.
* Privacy-safe optional logging.

This independent project is not affiliated with, endorsed by, or maintained by Skroutz.

= Requirements =

* WordPress 6.3 or newer.
* PHP 7.4 or newer.
* WooCommerce 8.0 or newer.
* A public HTTPS website.
* A Skroutz Marketplace merchant account with order webhooks enabled.

== Installation ==

1. Upload the plugin ZIP from Plugins > Add New Plugin > Upload Plugin.
2. Activate Smart Cart Bridge for Skroutz.
3. Open WooCommerce > Smart Cart Bridge.
4. Configure product and variation matching.
5. Copy the complete webhook URL into the Skroutz Marketplace merchant settings.

Treat the complete webhook URL as a credential. Regenerate it from the settings page if it is exposed.

== External services ==

This plugin integrates the site with Skroutz Marketplace, an external service operated by Skroutz S.A.

The plugin does not make background API calls to Skroutz. After the site owner registers the generated webhook URL, Skroutz sends requests to the site when a Smart Cart order is created or updated. These requests can contain order identifiers, product identifiers, quantities, prices, shipping charges, customer contact and address data, invoice information, and shipment details. The plugin stores the information in the corresponding WooCommerce order and returns a processing response containing the event type and order code.

The service is used only after the site owner configures it and requires a separate Skroutz Marketplace merchant account.

* Service documentation: https://developer.skroutz.gr/smart_cart/webhook/
* Merchant terms: https://merchants.skroutz.gr/merchants/terms?lang=en&store_lang=true
* Privacy policy: https://corporate.skroutz.gr/en/privacy-policy/

== Frequently Asked Questions ==

= Does it accept or reject orders through the Orders API? =

No. Version 1.0.1 imports and synchronizes incoming webhook events only.

= What happens when Skroutz retries a webhook? =

The unique order code is checked before creation, and a short-lived import lock protects against concurrent duplicate events.

= Are raw customer details written to debug logs? =

No. Logging is disabled by default and includes only the event type, order code, state, item count, and technical outcome.

= What data is stored? =

The plugin stores the customer, delivery, invoice, product, price, shipping, payment, and shipment information supplied for an order in WooCommerce. Plugin settings and the webhook secret are stored in WordPress options.

== Changelog ==

= 1.0.1 =

* Renamed the plugin for WordPress.org trademark compliance.
* Added WordPress.org external-service and privacy disclosures.
* Added marketplace shipping costs to WooCommerce order totals.
* Improved invoice billing-address and mobile-number handling.
* Moved order-screen styling to an enqueued stylesheet.
* Added automated WordPress Plugin Check and release packaging.

= 1.0.0 =

* Initial public release.
