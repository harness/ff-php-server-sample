# Before you Begin

Harness Feature Flags (FF) is a feature management solution that enables users to change the software’s functionality, without deploying new code. FF uses feature flags to hide code or behaviours without having to ship new versions of the software. A feature flag is like a powerful if statement.

For more information, see https://harness.io/products/feature-flags/

To read more, see https://ngdocs.harness.io/category/vjolt35atg-feature-flags

To sign up, https://app.harness.io/auth/#/signup/

This is a sample app demonstrating PHP Server SDK integration with Relay Proxy.

## To use this application, follow the steps as below ##

1) Create a project in Harness with Feature-flags module enabled
2) Create an environment within your project
3) Create a server and client side sdk keys in your environment **COPY the value from the Admin Console to your clipboard since this value will only be displayed once**
4) Add keys to .env file
4) Create a boolean feature-flag in the admin console
5) Replace the values for SDK Key (client) and feature-flag identifier in the example program from step 3 and 4
7) Run the environment with `make start` and open [link](http://localhost:8080/) with sample response

## Stop all services

```shell
make stop
```