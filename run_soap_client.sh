#!/bin/bash

# Find all files ending with Config.php in src/SubClient/*/
config_files=$(find src/SubClient/*/ -maxdepth 1 -name "*Config.php")

# Loop through each config file found
for config_file in $config_files; do
    # Define the commands to be run
    commands=(
        "vendor/bin/soap-client generate:types --config=\"$config_file\""
        "vendor/bin/soap-client generate:classmap --config=\"$config_file\""
        "vendor/bin/soap-client generate:client --config=\"$config_file\""
        "vendor/bin/soap-client generate:clientfactory --config=\"$config_file\""
    )

    # Loop through and echo then run each command
    for command in "${commands[@]}"; do
        echo $command
        eval $command
    done
done
