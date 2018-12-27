class Winery {
    constructor() {
        this.scripts = {
            app : {
                name : 'app',
                startText : 'Starting application.',
                run: function (params) {

                    const shell = require('child_process').execSync;
                    shell('sh winery/recipes/app.sh');

                }
            },
            upgrade : {
                name : 'upgrade',
                startText : 'Upgrading application.',
                run: function (params) {

                    const readlineSync = require('readline-sync');

                    if (readlineSync.keyInYN('If you have un-committed changes, they will be deleted.')) {
                        const shell = require('child_process').execSync;
                        shell('sh winery/recipes/upgrade.sh');
                    }
                }
            },
        };
    }
    action(args) {
        if (args[0] === 'app') return this.scripts.app;
        if (args[0] === 'upgrade') return this.scripts.upgrade;
    }
}
 module.exports = Winery;