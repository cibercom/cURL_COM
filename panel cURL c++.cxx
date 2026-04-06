#include <iostream>
#include <curl/curl.h>

int main() {
    CURL *curl;
    CURLcode res;

    // Initialize libcurl
    curl_global_init(CURL_GLOBAL_DEFAULT);
    curl = curl_easy_init();

    if(curl) {
        // Set the target URL
        curl_easy_setopt(curl, CURLOPT_URL, "https://prm.org.do/");

        // Set the request method to DELETE
        curl_easy_setopt(curl, CURLOPT_CUSTOMREQUEST, "DELETE");

        // Perform the request
        res = curl_easy_perform(curl);

        // Check for errors
        if(res != CURLE_OK) {
            fprintf(stderr, "curl_easy_perform() failed: %s\n", curl_easy_strerror(res));
        } else {
            std::cout << "Delete request successful" << std::endl;
        }

        // Cleanup the handle
        curl_easy_cleanup(curl);
    }

    // Global cleanup
    curl_global_cleanup();

    return 0;
}
