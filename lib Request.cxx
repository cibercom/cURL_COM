#include <curl/curl.h>

int main(void) {
    CURL *curl;
    CURLcode res;

    curl_global_init(CURL_GLOBAL_ALL);
    curl = curl_easy_init();
    if(curl) {
        // Set the URL for the DELETE request
        curl_easy_setopt(curl, CURLOPT_URL, "http://api.example.com/item/1");
        
        // Specify the DELETE method
        curl_easy_setopt(curl, CURLOPT_CUSTOMREQUEST, "DELETE");

        // Optional: Perform the request
        res = curl_easy_perform(curl);

        // Check for errors
        if(res != CURLE_OK)
            fprintf(stderr, "curl_easy_perform() failed: %s\n",
                    curl_easy_strerror(res));

        // Always cleanup
        curl_easy_cleanup(curl);
    }
    curl_global_cleanup();
    return 0;
}