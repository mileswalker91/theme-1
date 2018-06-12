module.exports = {
    makeDir: {
        command: [
                'cd assets',
                'cd db',
                'wp db export database_backup.sql --tables=$(wp db tables --all-tables-with-prefix --format=csv)'
            ].join('&&')
    },
    options: {
        stdout: true,
        stderr: true
    },
};