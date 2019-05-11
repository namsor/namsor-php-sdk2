echo update openapi-generator
./bin/utils/openapi-generator-cli.sh

rm -Rf ./namsor/client/php/*

echo run openapi-generator
java -jar modules/openapi-generator-cli/target/openapi-generator-cli.jar generate  --git-repo-id namsor-php-sdk2 --git-user-id namsor --skip-validate-spec -i https://v2.namsor.com/NamSorAPIv2/api2/openapi.json -g php -o  namsor/client/php

cp -R /home/namsor/codegen/openapi-generator/namsor/client/php/* /home/namsor/codegen/namsor-php-sdk2/
cp /home/namsor/codegen/openapi-generator/run-php.bash /home/namsor/codegen/namsor-php-sdk2/

