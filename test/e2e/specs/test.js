// For authoring Nightwatch tests, see
// http://nightwatchjs.org/guide#usage

module.exports = {
    'application loads': function (browser) {
        // automatically uses dev Server port from /config.index.js
        // default: http://localhost:8080
        // see nightwatch.conf.js
        const devServer = browser.globals.devServerURL;

        browser
            .url(devServer)
            .waitForElementVisible('#app', 5000)
    },
    'can login': function(browser) {
        browser
            .waitForElementVisible('.hero.login', 5000)

            // set login data
            .setValue('input[type=email]', 'admin@laravel-enso.com')
            .setValue('input[type=password]', 'password')

            // do login
            .click('button.button')
            .pause(5000)
            .assert.containsText('button', 'Enter the application');
    },

    'can initialize': (browser) => {
        browser
            .click('button')
            .pause(3000)
            .assert.containsText('.main-content p', 'Dashboard')
            .end();
    },
};
