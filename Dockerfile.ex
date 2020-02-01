FROM alpine
RUN cd /tmp \
        && apk add git \
        && git clone https://github.com/AlexanderSverchkov/test.git

COPY ./ /tmp/test/

WORKDIR /tmp/test