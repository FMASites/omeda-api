# fmasites/omeda

A Laravel package for interacting with the [Omeda API](https://knowledgebase.omeda.com/omedaclientkb/api-overview).

## Requirements

- PHP 8.3+
- Laravel 11 or 12

## Installation

```bash
composer require fmasites/omeda
```

## Configuration

Add the following to your `.env` file:

```env
OMEDA_APP_ID=
OMEDA_BASE_API_URL=
OMEDA_BRAND=
OMEDA_CLIENT=
OMEDA_CLIENT_BASE_API_URL=
OMEDA_INPUT_ID=
```

| Variable | Description |
|---|---|
| `OMEDA_APP_ID` | Your Omeda application ID |
| `OMEDA_BASE_API_URL` | Base URL for the Omeda brand API |
| `OMEDA_BRAND` | Your Omeda brand abbreviation |
| `OMEDA_CLIENT` | Your Omeda client abbreviation |
| `OMEDA_CLIENT_BASE_API_URL` | Base URL for client-level API endpoints |
| `OMEDA_INPUT_ID` | Input ID used for POST requests |

## Usage

### OmedaApi

```php
use FMASites\Omeda\OmedaApi;

$api = new OmedaApi();
```

You can also inject custom base URLs directly, which is useful in tests:

```php
$api = new OmedaApi(baseApiUrl: 'https://...', clientBaseApiUrl: 'https://...');
```

#### Available methods

```php
// Brand
$api->brandComprehensiveLookup();             // Cached for 8 hours

// Customer
$api->customerComprehensiveLookup($id);
$api->customerLookupByEmail($email);

// Orders & Transactions
$api->storeCustomerAndOrder($data);
$api->transactionLookup($transactionId);
$api->runProcessor($transactionIds);          // Utility API

// Postal
$api->postalInfoLookup($zipCode);             // Utility API

// Email
$api->emailOptinQueue($email, $deploymentTypeId, $options);
```

GET methods return `array|false` — `false` indicates a non-successful response (404, 300, etc.). POST methods return an `Illuminate\Http\Client\Response` instance.

### DataAdapter

Utilities for transforming brand comprehensive lookup data:

```php
use FMASites\Omeda\DataAdapter;

// Filter demographics down to specific type IDs
DataAdapter::filterByDemographicTypes($brandData, [1, 2, 3]);

// Simplify the full brand lookup response to a smaller structure
DataAdapter::simplifyBrandComprehensiveLookupData($brandData);

// Remove specific demographic value options by ID
DataAdapter::removeDemographicValueOptionsById($brandData, [10, 11]);

// Simplify a products array
DataAdapter::simplifyProductData($products);
```

### Enums

The package includes enums for common Omeda constants:

| Enum | Description |
|---|---|
| `AddressContactType` | Address contact type codes |
| `EmailContactType` | Email contact type codes |
| `PhoneContactType` | Phone contact type codes |
| `MarketingClassCode` | Marketing classification codes |
| `ProductType` | Product type codes |
| `SubscriptionClassCode` | Subscription classification codes |
| `LocationCodes` | Country, US state, Canadian province, and Mexican state codes |

## Testing

```bash
composer install
./vendor/bin/phpunit
```
