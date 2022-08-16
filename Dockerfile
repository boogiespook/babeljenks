FROM registry.redhat.io/rhel9/php-80@sha256:53a15af962ea77a2d6c6b1627195e40083c926effe041b897f867299b42f62bb 
MAINTAINER Chris Jenkins "chrisj@redhat.com"
EXPOSE 8000
COPY . /opt/app-root/src
CMD /bin/bash -c 'php -S 0.0.0.0:8000'
