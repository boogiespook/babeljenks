FROM registry.access.redhat.com/ubi9/php-81@sha256:b8aad438bb5f0560dace89cc63ae85f503297ef99096cf471574109a7f68ca45
MAINTAINER Chris Jenkins "chrisj@redhat.com"
EXPOSE 8000
COPY . /opt/app-root/src
CMD /bin/bash -c 'php -S 0.0.0.0:8000'
