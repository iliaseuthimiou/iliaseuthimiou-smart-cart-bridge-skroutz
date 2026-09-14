# Changelog

All notable changes to this project are documented here.

## 1.0.1 — 2026-09-14

- Renamed the public plugin to Smart Cart Bridge for Skroutz for WordPress.org trademark compliance.
- Updated the public plugin identity, text domain, PHP namespace, and package metadata while retaining the existing webhook endpoint.
- Added complete external-service and privacy disclosures.
- Added marketplace shipping costs to WooCommerce order totals.
- Improved invoice billing-address, collection-point, and mobile-number handling.
- Allowed WooCommerce shop managers to save the plugin settings they can access.
- Moved order-screen styling to an enqueued stylesheet.
- Added the official WordPress Plugin Check action and deterministic release ZIP packaging.

## 1.0.0 — 2026-09-03

- Initial public release.
- Added authenticated webhook URLs with regeneratable random secrets.
- Added idempotent order creation with a per-order import lock.
- Added product and variation matching by ID, SKU, or custom meta.
- Added safe WooCommerce state transitions and cancellation restocking behavior.
- Added legacy order-table and HPOS administration support.
- Added privacy-safe optional logging.
- Added validation that rejects incomplete or mismatched line items before order creation.
