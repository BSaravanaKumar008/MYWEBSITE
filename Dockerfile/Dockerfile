# Use an official Ubuntu as a parent image
FROM ubuntu:22.04

# Set the maintainer label
LABEL maintainer="BSaravanaKumar008"

# Install necessary packages
RUN apt-get update \
    && apt-get install -y nginx zip curl \
    && rm -rf /var/lib/apt/lists/*

# Download and extract the website files
RUN curl -o /tmp/mywebsite.zip -L https://github.com/BSaravanaKumar008/MYWEBSITE/archive/refs/heads/main.zip \
    && mkdir -p /var/www/html \
    && unzip /tmp/mywebsite.zip -d /tmp \
    && mv /tmp/MYWEBSITE-main/* /var/www/html/ \
    && rm -rf /tmp/mywebsite.zip /tmp/MYWEBSITE-main

# Expose port 7002 (default port for Nginx)
EXPOSE 7002

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]
